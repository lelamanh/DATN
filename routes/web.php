<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/tenduongdanlogin','test@tesst');
Route::get('/login','UserController@login')->name('login');
Route::get('/search','UserController@search')->name('search');
Route::post('/search','UserController@postSearch')->name('postSearch');
Route::get('/register','UserController@register')->name('register');
Route::get('/logout','UserController@logout')->name('logout');
Route::POST('/postlogin','UserController@postLogin')->name('postLogin');
Route::POST('/postregister','UserController@postRegister')->name('postRegister');
Route::prefix('admin')->group(function () {
    // route User
    Route::get('/listuser','UserController@List')->name('admin.listUser');
    Route::get('/edituser/{id}','UserController@Edit')->name('admin.edituser');
    Route::PUT('/updateuser/{id}','UserController@Update')->name('admin.updateUser');
    Route::get('/adduser','UserController@Add')->name('admin.addUser');
    Route::POST('/postadduser','UserController@PostAdd')->name('admin.postAddUser');
    Route::DELETE('/deleteuser/{id}','UserController@Delete')->name('admin.deleteUser');
    // route Diploma
    Route::get('/listdiploma','DiplomaController@List')->name('admin.listDiploma');
    Route::get('/editdiploma/{id}','DiplomaController@Edit')->name('admin.editDiploma');
    Route::PUT('/updatediploma/{id}','DiplomaController@Update')->name('admin.updateDiploma');
    Route::get('/adddiploma','DiplomaController@Add')->name('admin.addDiploma');
    Route::POST('/postadddiploma','DiplomaController@PostAdd')->name('admin.postAddDiploma');
    Route::DELETE('/deletediploma/{id}','DiplomaController@Delete')->name('admin.deleteDiploma');
    // route diplomaofuser
    Route::get('/listdiplomaofuser','DiplomaOfUserController@List')->name('admin.listDiplomaOfUser');
    Route::get('/editdiplomaofuser/{id}','DiplomaOfUserController@Edit')->name('admin.editDiplomaOfUser');
    Route::PUT('/updatediplomaofuser/{id}','DiplomaOfUserController@Update')->name('admin.updateDiplomaOfUser');
    Route::get('/addudiplomaofuser','DiplomaOfUserController@Add')->name('admin.addDiplomaOfUser');
    Route::POST('/postadddiplomaofuser','DiplomaOfUserController@PostAdd')->name('admin.postAddDiplomaOfUser');
    Route::DELETE('/deletediplomaofuser/{id}','DiplomaOfUserController@Delete')->name('admin.deleteDiplomaOfUser');
    Route::get('/showdiplomaofuser/{id}','DiplomaOfUserController@Show')->name('admin.showDiplomaOfUser');
    Route::get('/showdiplomaofuser/detail/{id}','DiplomaOfUserController@ShowDetail')->name('admin.showdetailDiplomaOfUser');
});
//route trang chủ
Route::prefix('home')->group(function () {
    // route User
    Route::get('/','HomeController@Home')->name('home');
    Route::get('/changepass','HomeController@Change')->name('home.changePass');
    Route::get('/about','HomeController@About')->name('home.about');
    Route::PUT('/postchangepass/{id}','HomeController@PostChangePass')->name('postchangepass');
});