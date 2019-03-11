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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::resource('cvs', 'CvController');

Route::get('system_management/login', 'Auth\Admin\LoginController@showLoginForm')->name('system_management.login');
Route::post('system_management/login', 'Auth\Admin\LoginController@login')->name('system_management.login');
Route::post('system_management/logout', 'Auth\Admin\LoginController@logout')->name('system_management.logout');
Route::prefix('system_management')->middleware('admin.auth')->name('system_management.')->group(function () {
    Route::resource('admins', 'AdminController');
    Route::resource('users', 'UserController');
    Route::get('cvs/all', 'CvController@showAllCv')->name('cvs.all');
    Route::view('/', 'system_management.home')->name('home');
});
