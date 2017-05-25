<?php

namespace App\Http\Controllers\Employee\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'surname'	=> 'required',
    		'name'		=> 'required',
    		'email'		=> 'required|email|max:255|unique:employees',
    		'password'	=> 'required|min:8|confirmed',
    		'gender'	=> 'required',
    		'dob'		=> 'required|date',
    	]);

    	Employee::create($request->all());

    	return redirect('/');
    }
}
