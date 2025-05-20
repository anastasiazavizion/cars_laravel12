<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index')->with('job','<p>Developer</p>')->with('data', [1,2,3]);

    }
}
