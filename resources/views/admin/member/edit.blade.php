@extends('layouts.admin')
@section('content')

<div class="p-5">
    <a href="{{route('admin.member.index')}}">
        <button class="btn btn-primary mb-4"><i class="fa fa-arrow-left" aria-hidden="true"></i> Quay lại</button>
    </a>

<h5>Thêm mới đoàn viên</h5>

<form action="{{route('admin.member.update',['id' => $member->id ])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label for="image">Ảnh đại diện</label>
            <input type="file" name="image" id="image" class="form-control" >
       
            <img src="{{ asset('uploads/' . $background->image) }}" alt="Ảnh đại diện" style="max-width: 100px;">
        </div>

        <div class="form-group col-md-6">
            <label for="name">Họ và tên</label>
            <input type="text" name="full_name" id="name" value="{{$member->full_name}}" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label for="gender">Giới tính</label>

            <select id="gender" name="gender" class="form-control">
                <option value="1" {{ $member->gender == 1 ? 'selected' : '' }}>Nam</option>
                <option value="0" {{ $member->gender == 0 ? 'selected' : '' }}>Nữ</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{$member->email}}" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
            <label for="password">Mật khẩu <span class="text-danger">Nếu không điền mật khẩu thì coi như không đổi</span></label>
            <input type="password" name="password" id="password" value="" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="mssv">Mã số sinh viên</label>
            <input type="text" name="mssv" id="mssv" class="form-control" value="{{$background->mssv}}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="phone_number">Số điện thoại</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{$background->phone_number}}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="description">Lớp</label>
            <select name="class_id" id="class_id" class="form-control" required>
                <option value="">Chọn lớp</option>
                @foreach ($classes as $class)
                    <option {{ $background->class_id == $class->id ? 'selected' : '' }} value="{{$class->id}}">{{$class->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="description">Chức vụ</label>
            <select name="position_id" id="position_id" class="form-control" required>
                <option value="">Chọn chức vụ</option>
                @foreach ($positions as $position)
                    <option {{ $background->position_id == $position->id ? 'selected' : '' }} value="{{$position->id}}">{{$position->name}}</option>
                @endforeach
            </select>
        </div>

        {{-- <div class="form-group col-md-6">
            <label for="role">Phân quyền</label>
            <select id="role" name="role" class="form-control">
                <option value="1">Admin</option>
                <option value="2">Đoàn viên</option>
            </select>
        </div> --}}

        <div class="form-group col-md-6">
            <label for="nation">Dân tộc</label>
            <input type="text" name="nation" id="nation" class="form-control" value="{{$background->nation}}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="religion">Tôn giáo</label>
            <input type="text" name="religion" id="religion" class="form-control" value="{{$background->religion}}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="address">Quê quán</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$background->address}}" required>
        </div>


        <div class="form-group col-md-6">
            <label for="day_in">Ngày vào đoàn</label>
            <input type="date" name="day_in" id="day_in" class="form-control" value="{{ $background->day_in ? \Carbon\Carbon::parse($background->day_in)->format('Y-m-d') : '' }}" required>
        </div>

        <div class="form-group col-md-6">
            <label for="issuance_date">Ngày cấp</label>
            <input type="date" name="issuance_date" id="issuance_date" class="form-control" value="{{ $background->issuance_date ? \Carbon\Carbon::parse($background->issuance_date)->format('Y-m-d') : '' }}" required>
        </div>
        

        <div class="form-group col-md-6">
            <label for="entry_place">Nơi vào đoàn</label>
            <input type="text" name="entry_place" id="entry_place" class="form-control" value="{{$background->entry_place}}" required>
        </div>

        
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>

</div>

@endsection