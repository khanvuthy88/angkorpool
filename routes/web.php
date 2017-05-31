<?php

Route::get('/', function(){ return view('welcome'); });

Route::get('user/register', 'Auth\RegisterController@create');
Route::post('user/register', 'Auth\RegisterController@store');
Route::get('user/login', 'Auth\LoginController@showLoginForm');
Route::post('user/login', 'Auth\LoginController@login')->name('user.login');
Route::get('user/logout', 'Auth\LoginController@logout');


Route::group(['middleware' => 'auth'], function(){
	Route::get('/user/profile', 'UserProfileController@showProfile');

	Route::get('/user/jobs', 'JobController@index');
	Route::get('/user/job/post', 'JobController@create');
	Route::post('/user/job/post', 'JobController@store');
});