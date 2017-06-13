<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    public function index()
    {
    	$jobs = Job::published()
    				->latest()
    				->limit(10)
    				->get();

    	$homepage = auth()->check() ? 'dashboard' : 'home';

    	return view($homepage, compact('jobs'));
    }
}
