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
    return view('index');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/game', function () {
    return view('game.game');
});

Route::get('/events', function () {
    return view('events.events');
});

Route::get('/projects/academic', 'User\projectsController@academic');
Route::get('/projects/magazine', 'User\projectsController@magazine');
Route::get('/projects/juniors', 'User\projectsController@juniors');
Route::get('/projects/events', 'User\projectsController@events');

Route::get('/magazine', 'User\magazineController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::group(['namespace' => 'Auth'],function(){
	// get admin homepage
	Route::GET('admin/home', 'AdminController@index');
	// get admin login page
	Route::GET('admin','LoginController@showLoginForm')->name('admin.login');
	// login with admin
	Route::POST('admin','LoginController@login');
	// send email for admin to change password
	Route::POST('admin-password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	// show page of admin to write his email to change password
	Route::GET('admin-password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	// reset admin password
	Route::POST('admin-password/reset','ResetPasswordController@reset');
	// get page where admin reset password
	Route::GET('admin-password/reset/{token}','ResetPasswordController@showResetForm')->name('admin.password.reset');
	Route::POST('logout','LoginController@logout');
});