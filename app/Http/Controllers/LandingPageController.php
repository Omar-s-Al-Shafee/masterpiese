<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingPage.landingPage');
    }

    public function signIn()
    {
        // Implement the logic for the sign in route
    }

    public function joinNow()
    {
        // Implement the logic for the join now route
    }
}
