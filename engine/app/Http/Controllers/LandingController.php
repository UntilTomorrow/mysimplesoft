<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home(Request $request)
    {
        $pagetitle = "Home";
        
        return view('landing.home', compact('pagetitle'));

    }
    public function project()
    {
        return view('landing.project');
    }
    
}
