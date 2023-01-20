<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __construct()
    {
        $this->middleware('landing');
    }
    
    public function index()
    {
        return view('auth.login');
    }
}
