<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlertController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;

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
    return view('auth.index');
});
Auth::routes();

Route::get('/homes', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test',[TestController::class,'index'])->name('test');
Route::post('post-test',[TestController::class,'create'])->name('post-test');

Route::get('facultyEnrolled',[FacultyController::class,'facultyList'])->name('facultyEnrolled');
Route::get('faculty/{id}',[FacultyController::class,'show'])->name('faculty.show');


Route::get('/send/mail/view/all',[FacultyController::class,'emailViewAll'])->name('send.email.view');
Route::post('/store/email/all',[FacultyController::class,'storeEmail'])->name('store.email');


Route::get('step-one',[FacultyController::class,'index'])->name('step-one');
Route::post('post-stepone',[FacultyController::class,'facultyEnrollStep1'])->name('post-stepone');

Route::get('step-two/{last_id}/{email}/steptwo.form',[FacultyController::class,'facultyEnrollStep2'])->name('step-two');
Route::post('post-steptwo',[FacultyController::class,'postfacultyEnrollStep2'])->name('post-steptwo');

Route::get('step-three/{last_id}/{email}/stepthree.form',[FacultyController::class,'facultyEnrollStep3'])->name('step-three');
Route::post('post-stepthree',[FacultyController::class,'postfacultyEnrollStep3'])->name('post-stepthree');

Route::get('step-four/{last_id}/succes.form',[FacultyController::class,'facultyEnrollStepfour'])->name('step-four');

Route::get('step-five/{appid}/download.form',[FacultyController::class,'facultyEnrollStepfive'])->name('step-five');

// notification
Route::get('alert',[AlertController::class,'index'])->name('alert');
Route::post('post-alert',[AlertController::class,'facultyEnrollStep1'])->name('post-alert');



Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('userlist',[AdminController::class,'userlist'])->name('userlist');
    Route::get('deptlist',[AdminController::class,'deptlist'])->name('deptlist');
    Route::get('usercreation',[AdminController::class,'creation'])->name('usercreation');
    Route::get('deptcreation',[AdminController::class,'departmentcreation'])->name('deptcreation');
    Route::post('post-usercreation',[AdminController::class,'postusercreation'])->name('post-usercreation');
    Route::post('post-deptcreation',[AdminController::class,'postdeptcreation'])->name('post-deptcreation');
    Route::post('delete',[AdminController::class,'destroy'])->name('deleteuser');
    Route::post('approve',[AdminController::class,'approve'])->name('approve');
});

Route::group(['prefix'=>'user','middleware'=>['isUser','auth']],function(){
    Route::get('login',[UserController::class,'index'])->name('auth.login');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});

Route::get('alert',[AlertController::class,'index'])->name('alert');
Route::post('post-alert',[AlertController::class,'facultyEnrollStep1'])->name('post-alert');



