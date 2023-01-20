<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KapoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('kapool');
    }

    public function index()
    {
        return view('kapool.index');
    }
}
