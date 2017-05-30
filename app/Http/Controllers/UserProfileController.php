<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    public function showProfile()
    {
    	$user = User::with(['experiences', 'educations'])
    				->where('id', auth()->user()->id)
    				->first();

    	return view('user-profile')->with(compact('user'));
    }
}
