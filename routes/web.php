<?php

Route::get('/', function(){ return view('welcome'); });

Route::get('user/register', 'Auth\RegisterController@create');
Route::post('user/register', 'Auth\RegisterController@store');
