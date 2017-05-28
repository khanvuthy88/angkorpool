<?php

Route::get('/', function(){ return view('welcome'); });

Route::get('user/register', 'Auth\RegisterController@create');
Route::post('user/register', 'Auth\RegisterController@store');
Route::get('user/login', 'Auth\LoginController@showLoginForm');
Route::post('user/login', 'Auth\LoginController@login');
