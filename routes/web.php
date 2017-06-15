<?php

Route::get('/', 'HomeController@index');

Route::get('register', 'Auth\RegisterController@create');
Route::post('register', 'Auth\RegisterController@store');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('user.login');
// Route::get('logout', 'Auth\LoginController@logout');


Route::group(['middleware' => 'auth:web.employees'], function(){
	// Route::get('/profile', 'UserProfileController@showProfile');

	Route::get('/jobs', 'JobController@index')->name('jobs');
    Route::get('/job/{id}', 'JobController@show')->where('id', '[0-9]+')->name('job.show');
});

Route::group([ 'middleware' => 'auth:web.employers'], function(){
    Route::get('/job/post', 'JobController@create')->name('job.post');
    Route::post('/job/post', 'JobController@store')->name('job.post');
});


Route::get('zoho', 'Test\ZohoController@fetchData');
Route::get('zoho/insert', 'Test\ZohoController@insert');
Route::get('zoho/job-opening', 'Test\ZohoController@fetchJobOpening');
Route::get('zoho/job-opening/insert', 'Test\ZohoController@createJobOpening');
