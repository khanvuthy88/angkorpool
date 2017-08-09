<?php

Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', 'Admin\Auth\LoginController@index')->name('admin.login');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::get('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

    Route::group([ 'middleware' => 'auth:admin' ], function(){
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    });
});

Route::group(['middleware' => 'auth.employer'], function(){
    Route::get('/admin','Employer\JobController@admin')->name('employer.index');
    Route::get('/jobs/posted', 'Employer\JobController@index')->name('employer.jobs');
    Route::get('/job/posted/{id}', 'Employer\JobController@show')->name('employer.job.show')->where('id', '[0-9]+');
    Route::get('/job/post', 'Employer\JobController@create')->name('employer.job.post');
    Route::post('/job/post', 'Employer\JobController@save');
    Route::get('/job/post/{id}/edit', 'Employer\JobController@edit')->name('employer.job.edit');
    Route::put('/job/post/{id}/edit', 'Employer\JobController@update');
    Route::get('/job/{id}/publish', 'Employer\JobController@publish')->name('employer.job.publish');
    Route::get('/job/{id}/delete', 'Employer\JobController@delete')->name('employer.job.delete');
});

Route::group(['middleware' => 'auth.employee'], function(){
	Route::get('/profile', 'Employee\ProfileController@showProfile')->name('employee.profile');
    Route::get('/dashboard', 'Employee\DashboardController@index')->name('employee.dashboard');

    Route::get('/applied/jobs', 'Employee\ApplyJobController@index')->name('employee.applied.jobs');
    Route::post('/apply/{job}', 'Employee\ApplyJobController@save')->name('employee.apply.job');

    Route::get('/job/alert', 'Employee\JobAlertController@index')->name('job.alert');
    Route::get('/job/alert/create', 'Employee\JobAlertController@create')->name('job.alert.create');
    Route::post('/job/alert/create', 'Employee\JobAlertController@save');
    Route::get('/job/alert/delete/{id}', 'Employee\JobAlertController@delete')->name('job.alert.delete');
});

Route::get('/jobs', 'JobController@index')->name('jobs');
Route::get('/job/search', 'Employee\JobController@search')->name('job.search');
Route::get('/job/{id}', 'Employee\JobController@show')->name('job.show')->where('id', '[0-9]+');


Route::get('/', 'HomeController@index');

Route::get('register', 'Auth\RegisterController@create');
Route::post('register', 'Auth\RegisterController@store');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('user.login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('zoho', 'Test\ZohoController@fetchData');
Route::get('zoho/insert', 'Test\ZohoController@insert');
Route::get('zoho/job-opening', 'Test\ZohoController@fetchJobOpening');
Route::get('zoho/job-opening/insert', 'Test\ZohoController@createJobOpening');
