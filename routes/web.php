<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [IndexController::class,'login'])->name('admin.login.index');
Route::get('/login', [IndexController::class,'login'])->name('admin.login.index');
Route::post('/login', [IndexController::class,'postLogin'])->name('admin.login.post');
Route::get('/register', [IndexController::class,'register'])->name('admin.register.index');
Route::post('/register', [IndexController::class,'postRegister'])->name('admin.register.post');
Route::get('/logout', [IndexController::class,'logout'])->name('admin.logout');

Route::get('/dashboard', [IndexController::class,'index'])->name('admin.dashboard.index');

Route::middleware('check.admin')->group(function () {

// Quản trị viên

// Quản lý khoa
Route::get('/department', [IndexController::class,'department'])->name('admin.department.index');
Route::get('/create-department', [IndexController::class,'createDepartment'])->name('admin.department.create');
Route::post('/store-department', [IndexController::class,'storeDepartment'])->name('admin.department.store');
Route::get('/edit-department/{id}', [IndexController::class,'editDepartment'])->name('admin.department.edit');
Route::post('/update-department/{id}', [IndexController::class,'updateDepartment'])->name('admin.department.update');
Route::get('/delete-department/{id}', [IndexController::class,'deleteDepartment'])->name('admin.department.delete');

// Quản lý lớp
Route::get('/classes', [IndexController::class,'classes'])->name('admin.classes.index');
Route::get('/create-classes', [IndexController::class,'createClasses'])->name('admin.classes.create');
Route::post('/store-classes', [IndexController::class,'storeClasses'])->name('admin.classes.store');
Route::get('/edit-classes/{id}', [IndexController::class,'editClasses'])->name('admin.classes.edit');
Route::post('/update-classes/{id}', [IndexController::class,'updateClasses'])->name('admin.classes.update');
Route::get('/delete-classes/{id}', [IndexController::class,'deleteClasses'])->name('admin.classes.delete');

// Quản lý đoàn viên
Route::get('/member', [IndexController::class,'member'])->name('admin.member.index');
Route::get('/create-member', [IndexController::class,'createMember'])->name('admin.member.create');
Route::post('/store-member', [IndexController::class,'storeMember'])->name('admin.member.store');
Route::get('/edit-member/{id}', [IndexController::class,'editMember'])->name('admin.member.edit');
Route::post('/update-member/{id}', [IndexController::class,'updateMember'])->name('admin.member.update');
Route::get('/delete-member/{id}', [IndexController::class,'deleteMember'])->name('admin.member.delete');

// Quản lý chức vụ
Route::get('/position', [IndexController::class,'position'])->name('admin.position.index');
Route::get('/create-position', [IndexController::class,'createPosition'])->name('admin.position.create');
Route::post('/store-position', [IndexController::class,'storePosition'])->name('admin.position.store');
Route::get('/edit-position/{id}', [IndexController::class,'editPosition'])->name('admin.position.edit');
Route::post('/update-position/{id}', [IndexController::class,'updatePosition'])->name('admin.position.update');
Route::get('/delete-position/{id}', [IndexController::class,'deletePosition'])->name('admin.position.delete');

// Quản lý hoạt động
Route::get('/activity', [IndexController::class,'activity'])->name('admin.activity.index');
Route::get('/create-activity', [IndexController::class,'createActivity'])->name('admin.activity.create');
Route::post('/store-activity', [IndexController::class,'storeActivity'])->name('admin.activity.store');
Route::get('/edit-activity/{id}', [IndexController::class,'editActivity'])->name('admin.activity.edit');
Route::post('/update-activity/{id}', [IndexController::class,'updateActivity'])->name('admin.activity.update');
Route::get('/delete-activity/{id}', [IndexController::class,'deleteActivity'])->name('admin.activity.delete');
Route::get('/list-activity/{id}', [IndexController::class,'listActivity'])->name('admin.activity.list');
Route::get('/change-status-activity/{id}', [IndexController::class,'changeStatusActivity'])->name('admin.activity.change.status');
Route::get('/mark-activity/{id}', [IndexController::class,'markActivity'])->name('admin.activity.mark');

// Quản lý nội quy
Route::get('/rule', [IndexController::class,'rule'])->name('admin.rule.index');
Route::get('/create-rule', [IndexController::class,'createRule'])->name('admin.rule.create');
Route::post('/store-rule', [IndexController::class,'storeRule'])->name('admin.rule.store');
Route::get('/edit-rule/{id}', [IndexController::class,'editRule'])->name('admin.rule.edit');
Route::post('/update-rule/{id}', [IndexController::class,'updateRule'])->name('admin.rule.update');
Route::get('/delete-rule/{id}', [IndexController::class,'deleteRule'])->name('admin.rule.delete');

// yêu cầu rút sổ
Route::get('/request', [IndexController::class,'request'])->name('admin.request.index');
Route::get('/accept-request/{id}', [IndexController::class,'acceptRequest'])->name('admin.request.accept');

});

Route::middleware('check.union_member_role')->group(function () {
// Member
Route::get('/member-dashboard', [IndexController::class,'index'])->name('member.dashboard.index');
Route::get('/member-activity', [IndexController::class,'memberActivity'])->name('member.activity.index');
Route::get('/member-activity-view/{id}', [IndexController::class,'memberViewActivity'])->name('member.activity.view');
Route::get('/register-activity/{id}', [IndexController::class,'registerActivity'])->name('member.activity.register');
Route::get('/registered-activity', [IndexController::class,'registeredActivity'])->name('member.activity.registered');
Route::get('/member-rule', [IndexController::class,'memberRule'])->name('member.rule.index');
Route::get('/member-rule-view/{id}', [IndexController::class,'memberViewRule'])->name('member.rule.view');

Route::get('/member-registered-view/{id}', [IndexController::class,'memberViewRegisteredActivity'])->name('member.registered.activity.view');
Route::get('/edit-profile', [IndexController::class,'editProfile'])->name('member.profile.edit');
Route::post('/update-profile', [IndexController::class,'updateProfile'])->name('member.profile.update');

Route::get('/member-request', [IndexController::class,'memberRequest'])->name('member.request.index');
Route::get('/member-add-request', [IndexController::class,'addRequest'])->name('member.request.add');

});