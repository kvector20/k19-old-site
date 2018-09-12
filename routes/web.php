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

// Auth::routes();
Route::group(['namespace' => 'User'], function() {
	Route::get('/', 'HomeController@index');
	Route::get('/about', 'HomeController@about');


	Route::get('/projects/academic', 'projectsController@academic')->name('projects.academic');
	Route::get('/projects/magazine', 'projectsController@magazine')->name('projects.magazine');
	Route::get('/projects/juniors', 'projectsController@juniors')->name('projects.juniors');
	Route::get('/projects/events', 'projectsController@events')->name('projects.events');
	
	Route::get('/events', 'eventsConteroller@events')->name('events');
	Route::get('/events/career5', 'eventsConteroller@career5')->name('events.career5');
	Route::get('/events/opening18', 'eventsConteroller@opening18')->name('events.opening18');
	Route::get('/events/welcome18', 'eventsConteroller@welcome18')->name('events.welcome18');

	Route::get('/k19/magazine/m/{month}', 'magazineController@index')->name('k19.magazine.month');
	Route::get('/k19/magazine/h/{headline}', 'magazineController@index_h')->name('k19.magazine.headline');
	Route::get('/k19/magazine/t/{topic}', 'magazineController@topic')->name('k19.magazine.topic');
	
	Route::post('/k19/magazine/c/{topic}', 'magazineController@comment')->name('topic.comment');

	Route::get('/contact', 'ContactController@index')->name('contact');
	Route::post('/contact', 'ContactController@store')->name('contact');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin'],function(){
	// get admin homepage
	// Route::GET('admin/home', 'adminsController@index');
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
	Route::resource('admin/headlines', 'HeadlinesController');
	Route::resource('admin/topics', 'TopicsController');
	Route::post('admin/topics/{topic}/publish', 'TopicsController@publish')->name('topics.publish');
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