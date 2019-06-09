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

	Route::get('/about/workshops', 'HomeController@workshops')->name('about.workshops');

	Route::get('/projects/academic', 'projectsController@academic')->name('projects.academic');
	Route::get('/projects/magazine', 'projectsController@magazine')->name('projects.magazine');
	Route::get('/projects/juniors', 'projectsController@juniors')->name('projects.juniors');
	Route::get('/projects/events', 'projectsController@events')->name('projects.events');
	
	Route::get('/events', 'eventsConteroller@events')->name('events');
	Route::get('/events/career5', 'eventsConteroller@career5')->name('events.career5');
	Route::get('/events/opening18', 'eventsConteroller@opening18')->name('events.opening18');
	Route::get('/events/welcome18', 'eventsConteroller@welcome18')->name('events.welcome18');

	Route::get('/events/participants/19/recruitment', 'eventsConteroller@participants19')->name('events.participants19');
	Route::POST('/events/participants/19/recruitment', 'eventsConteroller@participants19Store')->name('events.participants19');
	Route::get('/events/opening/19/recruitment', 'eventsConteroller@opening19')->name('events.opening19');
	Route::POST('/events/opening/19/recruitment', 'eventsConteroller@opening19Store')->name('events.opening19');

	Route::get('/events/memberssecond/19/recruitment', 'eventsConteroller@memberssecond19')->name('events.memberssecond19');
	Route::POST('/events/memberssecond/19/recruitment', 'eventsConteroller@memberssecond19Store')->name('events.memberssecond19');

	// -------------------------------- Career 6 -----------------------------------------------------
	Route::get('/events/career6/recruitment', 'eventsConteroller@career6')->name('events.career6');
	Route::get('/events/career6/recruitment/form/{form}', 'eventsConteroller@career6form')->name('events.career6.form');
	Route::POST('/events/career6/recruitment', 'eventsConteroller@career6Store');
	// -------------------------------- Career 6 -----------------------------------------------------

	// -------------------------------- Highway -----------------------------------------------------
	Route::get('/events/highway/19', 'eventsConteroller@highway19')->name('events.highway19');
	Route::POST('/events/highway/19', 'eventsConteroller@highway19Store')->name('events.highway19');

	// -------------------------------- Highway -----------------------------------------------------
	
	// -------------------------------- High Board -----------------------------------------------------
	Route::get('/events/highboard/20', 'eventsConteroller@highboard20')->name('events.highboard20');
	Route::POST('/events/highboard/20', 'eventsConteroller@highboard20Store')->name('events.highboard20');
	// -------------------------------- High Board -----------------------------------------------------

	Route::get('/k19/magazine/m/{month}', 'magazineController@index')->name('k19.magazine.month');
	Route::get('/k19/magazine/h/{headline}', 'magazineController@index_h')->name('k19.magazine.headline');
	Route::get('/k19/magazine/t/{topic}', 'magazineController@topic')->name('k19.magazine.topic');
	
	Route::get('/k19/magazine', 'magazineController@indexApi')->name('k19.magazine');
	Route::get('/k19/magazine/{id}', 'magazineController@getApi')->name('k19.magazine.id');
	
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
	// Edit admin education
	Route::GET('admin/education/edit', 'ProfileController@editEducationView')->name('admin.education.edit');
	Route::POST('admin/education/edit', 'ProfileController@editEducation')->name('admin.education.edit');
	// Edit admin experience
	Route::GET('admin/experience/edit', 'ProfileController@editExperienceView')->name('admin.experience.edit');
	Route::POST('admin/experience/edit', 'ProfileController@editExperience')->name('admin.experience.edit');
	// Edit admin personal info
	Route::GET('admin/info/edit', 'ProfileController@editInfoView')->name('admin.info.edit');
	Route::POST('admin/info/edit', 'ProfileController@editInfo')->name('admin.info.edit');
	// get all admins
	Route::resource('admin/admins', 'AdminsController');
	Route::resource('admin/roles', 'RolesController');
	Route::resource('admin/permissions', 'PermissionsController');
	Route::resource('admin/headlines', 'HeadlinesController');
	Route::resource('admin/topics', 'TopicsController');
	Route::post('admin/topics/{topic}/publish', 'TopicsController@publish')->name('topics.publish');
	Route::resource('admin/events', 'EventsController');
	Route::resource('admin/workshops', 'WorkshopsController');
	
	Route::GET('admin/participants19', 'Participants19Controller@index')->name('participants19.index');
	Route::GET('admin/participants19/rejected', 'Participants19Controller@rejected')->name('participants19.rejected');
	Route::POST('admin/participants19/rejected', 'Participants19Controller@rejectedStore')->name('participants19.rejected');
	
	Route::GET('admin/memberssecond19', 'MembersSecondController@index')->name('memberssecond19.index');
	
	Route::GET('admin/opening19', 'Opening19Controller@index')->name('opening19.index');
	Route::GET('admin/opening19/mail', 'Opening19Controller@mail')->name('opening19.mail');
	
	Route::GET('admin/career6', 'Career6Controller@index')->name('career6.index');
	Route::GET('admin/career6/sessions', 'Career6Controller@sessions')->name('career6.session');
	Route::GET('admin/career6/sessions/create', 'Career6Controller@create')->name('career6.session.create');
	Route::POST('admin/career6/sessions/create', 'Career6Controller@store');
	Route::GET('admin/career6/sessions/{session}/edit', 'Career6Controller@edit')->name('career6.session.edit');
	Route::GET('admin/career6/mail', 'Career6Controller@mail')->name('career6.mail');
	Route::PUT('admin/career6/sessions/{session}/update', 'Career6Controller@update')->name('career6.session.update');
	Route::POST('admin/career6/sessions/status/{session}', 'Career6Controller@status')->name('career6.session.status');
	
	// Highway
	Route::GET('admin/highway19', 'Highway19Controller@index')->name('highway19.index');
	Route::GET('admin/highway19/data', 'Highway19Controller@show')->name('highway19.data');
	Route::POST('admin/highway19/data', 'Highway19Controller@data')->name('highway19.data');

	// High Board 20
	Route::GET('admin/highboard20', 'HighBoard20Controller@index')->name('highboard20.index');

	Route::GET('admin/file', 'Career6Controller@file');
	Route::resource('admin/contact', 'ContactController');
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