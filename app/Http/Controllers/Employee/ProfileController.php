<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Employee::with(['experiences', 'educations'])
                    ->where('id', auth()->user()->id)
                    ->first();

        return view('employee.profile')->with(compact('user'));
    }
}
