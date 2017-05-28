<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserExperience;

class UserProfileController extends Controller
{
    public function showProfile()
    {
    	$experiences = auth()->user()->experiences;

    	return view('user-profile')->with(compact('experiences'));
    }
}
