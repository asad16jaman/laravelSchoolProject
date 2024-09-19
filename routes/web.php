<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('dashboard.index');
});


Route::get('/basic-view',[AdminSchoolController::class,'basicSchool_index'])->name('basic.index');
Route::get('/senior-view',[AdminSchoolController::class,'seniorSchool_index'])->name('senior.index');

Route::get('/create',[UserSchoolController::class ,'create'])->name('user.upload');
Route::get('/download',[UserSchoolController::class ,'download_assesment'])->name('user.download');


Route::get('/school-create',[AdminSchoolController::class,'create'])->name('school.create');
Route::post('/school-create',[AdminSchoolController::class,'store'])->name('school.store');


Route::get('users-management', [UserManagementController::class, 'index'])->name('users');
Route::get('add-new-user', [UserManagementController::class, 'create'])->name('add.user');
Route::post('add-new-user', [UserManagementController::class, 'store']);
Route::get('edit-user/{id}',[UserManagementController::class, 'edit'])->name('edit.user');
Route::post('edit-user/{id}',[UserManagementController::class, 'update']);
Route::post('users-management/{id}',[UserManagementController::class, 'destroy'])->name('delete.user');








Route::get('/d',function(){

})->name('logout');









