<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\AuthRegister;

class RegisterController extends Controller
{
    use AuthRegister;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function store(Request $request)
    {
        $this->validateInput($request);

        $this->register($request);

        session()->flash('msg_success', 'Successfully register. Login to your account now.');

        return redirect('/login');
    }

    public function create()
    {
        return view('auth.register');
    }
}
