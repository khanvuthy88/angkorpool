<?php

namespace App\Http\Controllers\Auth;

use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['guest:web.employers', 'guest:web.employees']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'surname' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email|max:255|unique:employees',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'same:password',
            'user_type' => 'required',
        ]);

        Employee::create($request->all());

        return redirect('/login');
    }

    public function create()
    {
        return view('auth.register');
    }
}
