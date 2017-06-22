<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:web.employers', 'guest:web.employees']);
    }

    public function index()
    {
    	$jobs = Job::published()
    				->latest()
    				->limit(10)
    				->get();

    	return view('home', compact('jobs'));
    }
}
