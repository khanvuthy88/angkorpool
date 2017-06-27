<?php

Route::group(['prefix' => 'employer', 'middleware' => 'auth:web.employers'], function(){
    Route::get('/jobs', 'Employer\JobController@index')->name('employer.jobs');
    Route::get('/job/post', 'Employer\JobController@create')->name('employer.job.post');
    Route::post('/job/post', 'Employer\JobController@store');
    Route::get('/job/{id}', 'Employer\JobController@show')->name('employer.job.show');
    Route::get('/job/{id}/publish', 'Employer\JobController@publish')->name('employer.job.publish');
});

Route::group(['middleware' => 'auth:web.employees'], function(){
	Route::get('/profile', 'Employee\ProfileController@showProfile');
    Route::get('/dashboard', 'Employee\DashboardController@index')->name('employee.dashboard');
});

Route::get('/jobs', 'JobController@index')->name('jobs');
Route::get('/job/search', 'Employee\JobController@search')->name('job.search');
Route::get('/job/{id}', 'Employee\JobController@show')->name('job.show');


Route::get('/', 'HomeController@index');

Route::get('register', 'Auth\RegisterController@create');
Route::post('register', 'Auth\RegisterController@store');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('user.login');
Route::get('logout', 'Auth\LoginController@logout');


Route::get('zoho', 'Test\ZohoController@fetchData');
Route::get('zoho/insert', 'Test\ZohoController@insert');
Route::get('zoho/job-opening', 'Test\ZohoController@fetchJobOpening');
Route::get('zoho/job-opening/insert', 'Test\ZohoController@createJobOpening');
