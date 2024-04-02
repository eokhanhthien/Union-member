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