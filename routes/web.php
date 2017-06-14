<?php

Route::get('/', 'HomeController@index');

Route::get('user/register', 'Auth\RegisterController@create');
Route::post('user/register', 'Auth\RegisterController@store');
Route::get('user/login', 'Auth\LoginController@showLoginForm');
Route::post('user/login', 'Auth\LoginController@login')->name('user.login');
// Route::get('user/logout', 'Auth\LoginController@logout');


Route::group(['middleware' => 'auth:web.employees'], function(){
	Route::get('/user/profile', 'UserProfileController@showProfile');

	Route::get('/jobs', 'JobController@index')->name('jobs');
    Route::get('/job/{id}', 'JobController@show')->name('job.show');
	Route::get('/job/post', 'JobController@create')->name('job.post');
	Route::post('/job/post', 'JobController@store')->name('job.post');
});


Route::get('zoho', 'Test\ZohoController@fetchData');
Route::get('zoho/insert', 'Test\ZohoController@insert');
Route::get('zoho/job-opening', 'Test\ZohoController@fetchJobOpening');
Route::get('zoho/job-opening/insert', 'Test\ZohoController@createJobOpening');
