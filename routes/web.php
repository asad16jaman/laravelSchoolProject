<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserSchoolController;
use App\Http\Controllers\AdminSchoolController;
use App\Http\Controllers\UserManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');

Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');

Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');

Route::get('reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::get('user-profile', [UserController::class, 'index'])->middleware('auth')->name('user-profile');
Route::post('user-profile', [UserController::class, 'update'])->middleware('auth')->name('user.update');
Route::post('user-profile/password', [UserController::class, 'passwordUpdate'])->middleware('auth')->name('password.change');


Route::get('roles', [RolesController::class, 'index'])->middleware('auth')->name('roles');
Route::post('roles/{id}', [RolesController::class, 'destroy'])->middleware('auth')->name('delete.role');
Route::get('new-role', [RolesController::class, 'create'])->middleware('auth')->name('add.role');
Route::post('new-role', [RolesController::class, 'store'])->middleware('auth');
Route::post('edit-role/{id}', [RolesController::class, 'update'])->middleware('auth');
Route::get('edit-role/{id}', [RolesController::class, 'edit'])->middleware('auth')->name('edit.role');


Route::middleware(['auth'])->group(function(){

    Route::get('/upload',[UserSchoolController::class ,'create'])->name('template.upload');
    Route::post('/upload',[UserSchoolController::class ,'store']);
    Route::get('/template-download',[UserSchoolController::class ,'template'])->name('template.download');
    Route::get('/assesment-download',[UserSchoolController::class ,'download'])->name('assesment.download');
    Route::post('/assesment-download',[UserSchoolController::class ,'confirm_download'])->name('assesment.download');

    Route::get('/basic-view',[AdminSchoolController::class,'basicSchool_index'])->name('basic.index');
    Route::get('/senior-view',[AdminSchoolController::class,'seniorSchool_index'])->name('senior.index');

    //route about school
    Route::get('/school-create',[AdminSchoolController::class,'create'])->name('school.create');
    Route::post('/school-create',[AdminSchoolController::class,'store'])->name('school.store');
    Route::get('/school-edit/{id}',[AdminSchoolController::class,'edit'])->name('school.eidt');
    Route::post('/school-edit/{id}',[AdminSchoolController::class,'update'])->name('school.update');
    Route::post('/school-delete/{id}',[AdminSchoolController::class,'destroy'])->name('school.delete');

    
    //storing template admin
    Route::get('/template',[TemplateController::class,'create'])->name('template');
    Route::post('/template',[TemplateController::class,'store'])->name('template.store');
    //download template admin
    Route::get('/download-template/{id}',[TemplateController::class,'download_template'])->name('admin.download');
    Route::post('/download-template/{id}',[TemplateController::class,'downloaded'])->name('admin.download');
    //upload checked templat admin
    Route::get('/upload-template/{id}',[TemplateController::class,'upload'])->name('admin.upload');
    Route::post('/upload-template/{id}',[TemplateController::class,'template_store'])->name('admin.upload');


    //creating user by admin
    Route::get('users-management', [UserManagementController::class, 'index'])->name('users');
    Route::get('add-new-user', [UserManagementController::class, 'create'])->name('add.user');
    Route::post('add-new-user', [UserManagementController::class, 'store']);
    Route::get('edit-user/{id}',[UserManagementController::class, 'edit'])->name('edit.user');
    Route::post('edit-user/{id}',[UserManagementController::class, 'update']);
    Route::post('users-management/{id}',[UserManagementController::class, 'destroy'])->name('delete.user');


});


















