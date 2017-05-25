<?php

Route::get('/', function(){ return view('welcome'); });
Route::post('employee/register', 'Employee\Auth\RegisterController@store');
