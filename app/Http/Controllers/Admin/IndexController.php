<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnionMember;
use App\Models\Background;
use App\Models\Department;
use App\Models\Classes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        if (Auth::guard('union_member')->check()) {
            // Người dùng union_member đã đăng nhập, tiếp tục hiển thị trang dashboard của họ
            return view('admin.dashboard.index');
        }
    
        // Nếu không phải union_member hoặc không đăng nhập, chuyển hướng đến trang đăng nhập admin
        return redirect()->route('admin.login.index');
    }
    public function login(){
        return view("admin.auth.login");
    }
    public function register(Request $request){
        return view("admin.auth.register");
    }
    public function postRegister(Request $request){
        $union_member = new UnionMember();
        $union_member->full_name = $request->full_name;
        $union_member->email = $request->email;
        $union_member->password = bcrypt($request->password);
        $union_member->role = 1;
        $union_member->save();
        return redirect()->back();
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {              
            if (Auth::guard('union_member')->attempt($credentials)) {
               // Kiểm tra xem đã đăng nhập chưa 
                if (Auth::guard('union_member')->check()) {
                    // Kiểm tra role
                    if (Auth::guard('union_member')) {
                        return redirect()->route('admin.dashboard.index');
                    } 
                }
            } else {
                return redirect()->back()->with('error', 'Sai thông tin đăng nhập');
            }
            } catch (ValidationException $e) {
            return redirect()->back()->withErrors(['message' => 'Email hoặc mật khẩu không chính xác'])->withInput();
        }
    }
    public function logout(){
        Auth::guard('union_member')->logout();
        return redirect()->route('admin.login.index');
    }

    // START Quản lý khoa ========================================================================================================
    public function department(){
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));

    }

    public function createDepartment(Request $request){
        return view('admin.department.add');
    }

    public function storeDepartment(Request $request){
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect('/department')->with('success', 'Thêm mới khoa thành công');
    }

    public function editDepartment($id){
        $department = Department::find($id);
        return view('admin.department.edit',compact('department'));
    }

    public function updateDepartment(Request $request, $id) {
        $department = Department::find($id);
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect('/department')->with('success', 'Cập nhật khoa thành công');
    }

    public function deleteDepartment($id){
        $department = Department::find($id);
        $department->delete();
        return redirect('/department')->with('success', 'Xóa khoa thành công');
    }
    // END Quản lý khoa ========================================================================================================

      // START Quản lý lớp ========================================================================================================
      public function classes(){
        $classes = Classes::all();

        return view('admin.classes.index', compact('classes'));

    }

    public function createClasses(Request $request){
        $departments = Department::all();
        return view('admin.classes.add',compact('departments'));
    }

    public function storeClasses(Request $request){
        $class = new Classes();
        $class->name = $request->name;
        $class->department_id = $request->department_id;
        $class->save();
        return redirect('/classes')->with('success', 'Thêm mới lớp thành công');
    }

    public function editClasses($id){
        $class = Classes::find($id);
        $departments = Department::all();
        return view('admin.classes.edit',compact('class','departments'));
    }

    public function updateClasses(Request $request, $id) {
        $classes = Classes::find($id);
        $classes->name = $request->name;
        $classes->department_id = $request->department_id;
        $classes->save();
        return redirect('/classes')->with('success', 'Cập nhật lớp thành công');
    }

    public function deleteClasses($id){
        $classes = Classes::find($id);
        $classes->delete();
        return redirect('/classes')->with('success', 'Xóa lớp thành công');
    }
    // END Quản lý lớp ========================================================================================================

    // START Quản lý đoàn viên ========================================================================================================
    public function member(){
        $members = UnionMember::where('role',2)->get();

        return view('admin.member.index', compact('members'));

    }

    public function createMember(Request $request){
        $classes = Classes::all();
        return view('admin.member.add',compact('classes'));
    }

    public function storeMember(Request $request){
        $unionMember = new UnionMember();
        $unionMember->full_name = $request->full_name;
        $unionMember->email = $request->email;
        $unionMember->password = bcrypt($request->password);
        $unionMember->role = 2;
        $unionMember->save();

        $background = new Background();
        $background->union_member_id = $unionMember->id;
        $background->mssv = $request->mssv;
        $background->full_name = $request->full_name;
        $background->gender = $request->gender;
        $background->nation = $request->nation;
        $background->religion = $request->religion;
        $background->address = $request->address;
        $background->day_in = $request->day_in;
        $background->entry_place = $request->entry_place;
        $background->issuance_date = $request->issuance_date;
        $background->class_id = $request->class_id;
        $background->phone_number = $request->phone_number;
        $background->position_id = 1;

        $get_image = $request->image;
        $path = 'uploads/';
        $get_name_image = $get_image-> getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image -> getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $background->image = $new_image;

        $background->save();

        return redirect('/member')->with('success', 'Thêm mới đoàn viên thành công');
    }

    public function editMember($id){
        $member = UnionMember::find($id);
        $classes = Classes::get();
        $background = Background::where('union_member_id',$id)->first();
        return view('admin.member.edit',compact('classes','member','background'));
    }

    public function updateMember(Request $request, $id) {
        $unionMember = UnionMember::find($id);
        $unionMember->full_name = $request->full_name;
        $unionMember->email = $request->email;
        if($request->password){
        $unionMember->password = bcrypt($request->password);
        }
        $unionMember->role = 2;
        $unionMember->save();

        $background = Background::where('union_member_id',$id)->first();
        $background->union_member_id = $unionMember->id;
        $background->mssv = $request->mssv;
        $background->full_name = $request->full_name;
        $background->gender = $request->gender;
        $background->nation = $request->nation;
        $background->religion = $request->religion;
        $background->address = $request->address;
        $background->day_in = $request->day_in;
        $background->entry_place = $request->entry_place;
        $background->issuance_date = $request->issuance_date;
        $background->class_id = $request->class_id;
        $background->phone_number = $request->phone_number;
        $background->position_id = 1;

        $get_image = $request->image;
        if($get_image){
            // Bỏ hình ảnh cũ
            $path_unlink = 'uploads/'.$background->image;
            if(file_exists($path_unlink)){
                unlink($path_unlink);
            }
            // Thêm mới
            $path = 'uploads/';
            $get_name_image = $get_image-> getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image -> getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $background->image = $new_image;
        }
        $background->save();


        return redirect('/member')->with('success', 'Cập nhật đoàn viên thành công');
    }

    public function deleteMember($id){
        $member = UnionMember::find($id);
        $background = Background::where('union_member_id',$id)->first();
        $path_unlink = 'uploads/'.$background->image;
        if(file_exists($path_unlink)){
            unlink($path_unlink);
        }
        $member->delete();
        $background->delete();
        return redirect('/member')->with('success', 'Xóa đoàn viên thành công');
    }
    // END Quản lý đoàn viên ========================================================================================================
}
