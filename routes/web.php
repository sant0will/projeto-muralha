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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile', 'ProfileController');
Route::resource('selectiveprocess', 'SelectiveProcessController');
Route::resource('admin', 'AdminController');
Route::resource('course', 'CourseController');
Route::resource('quota', 'QuotaController');
Route::resource('specialneed', 'SpecialNeedController');
Route::resource('subscription', 'SubscriptionController');