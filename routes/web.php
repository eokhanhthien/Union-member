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



Route::get('/login', [IndexController::class,'login'])->name('admin.login.index');
Route::post('/login', [IndexController::class,'postLogin'])->name('admin.login.post');
Route::get('/register', [IndexController::class,'register'])->name('admin.register.index');
Route::post('/register', [IndexController::class,'postRegister'])->name('admin.register.post');
Route::get('/logout', [IndexController::class,'logout'])->name('admin.logout');


// Quản trị viên
Route::get('/dashboard', [IndexController::class,'index'])->name('admin.dashboard.index');

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