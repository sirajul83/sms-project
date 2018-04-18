<?php

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
    return view('welcome');
});
Route::get('/home',function(){
	return view('layout.master');
});
Route::resource('/addmission','addmissionControll');
Route::group(['middleware'=>'auth'], function(){
    Route::resource('/student','StudentController');
    Route::resource('/subject','subjectController');
    Route::resource('/teacher','teacherController');
    Route::resource('/mark','markController');
    Route::resource('/exam','examController');
    Route::resource('/attendance','attendanceController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

