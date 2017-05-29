<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserExperience;
use App\UserEducation;

class UserProfileController extends Controller
{
    public function showProfile()
    {
    	$experiences = UserExperience::where('user_id', auth()->user()->id)->latest()->get();
    	$educations = UserEducation::where('user_id', auth()->user()->id)->latest()->get();

    	return view('user-profile')->with(compact('experiences', 'educations'));
    }
}
