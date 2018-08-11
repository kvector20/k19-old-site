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

Route::get('/events', 'User\eventsConteroller@events');
Route::get('/events/career5', 'User\eventsConteroller@career');

Route::get('/projects/academic', 'User\projectsController@academic');
Route::get('/projects/magazine', 'User\projectsController@magazine');
Route::get('/projects/juniors', 'User\projectsController@juniors');
Route::get('/projects/events', 'User\projectsController@events');

Route::get('/magazine', 'User\magazineController@index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin'],function(){
	// get admin homepage
	Route::GET('admin/home', 'adminsController@index');
	// admin profile
	Route::GET('admin/profile', 'ProfileController@index')->name('admin.profile');
	// change profile image
	Route::POST('admin/photo', 'ProfileController@updatePhoto')->name('admin.photo');
	// update admin data
	Route::PUT('admin/update', 'ProfileController@update')->name('admin.update');
	// change admin password
	Route::POST('admin/password', 'ProfileController@password')->name('admin.password');
	// get all admins
	Route::resource('admin/admins', 'AdminsController');
	Route::resource('admin/roles', 'RolesController');
	Route::resource('admin/permissions', 'PermissionsController');
});



// Admin routes
Route::group(['namespace' => 'Auth'],function(){
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
	Route::GET('admin-password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
	//logout
	Route::POST('logout','LoginController@logout');
});