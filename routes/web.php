<?php

Route::get('/', function(){ return view('welcome'); });
Route::post('user/register', 'Auth\RegisterController@store');
