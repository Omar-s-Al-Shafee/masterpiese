<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JoinNowController extends Controller
{
    public function joinNow()
    {
        return view('landingPage.joinNow');
    }

    public function register(Request $request)
    {
        // Perform registration logic and validation
        // Example implementation
        $request->validate([
            'full-name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
    $user->name = $request->input('full-name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->confirm_password = ''; // Provide a default value here
    $user->role_id = 2; // Assuming the default role for join now users is 2
    $user->save();

        // Set a success message in the session
        Session::flash('success', 'User registered successfully');

        // Redirect the user to the appropriate page after registration
        return redirect()->route('dashboard');
    }
}
