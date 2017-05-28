<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'same:password',
        ]);

        User::create($request->all());

        return redirect('/user/login');
    }

    public function create()
    {
        return view('auth.register');
    }
}
