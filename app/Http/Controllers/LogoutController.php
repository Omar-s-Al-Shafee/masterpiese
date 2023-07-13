<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();

        // Redirect to the desired page after logout
        return redirect()->route('landingPage');
    }
}
