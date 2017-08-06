<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:employees',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'same:password',
            'user_type' => 'required',
        ], [
            'required' => 'Field is required.',
            'user_type.required' => 'Please tell us who you are.',
        ]);

        User::create($request->only('email', 'password', 'user_type'));

        session()->flash('msg_success', 'Successfully register. Login to your account now.');

        return redirect('/login');
    }

    public function create()
    {
        return view('auth.register');
    }
}
