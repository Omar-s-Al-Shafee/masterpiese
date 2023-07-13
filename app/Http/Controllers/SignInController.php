<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class SignInController extends Controller
{
    public function signIn()
    {
        return view('landingPage.signIn');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($request->isMethod('post')) {
        // Perform login logic and validation
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role_id === 1) {
                return redirect()->intended(route('dashboard.layoutDash.index'));
            } elseif ($user->role_id === 2) {
                return redirect()->intended(route('homepage.homepage'));
            } elseif ($user->role_id === 3) {
                return redirect()->route('homeCompany');
            }
        } else {
            // Add session message for login failure
            Session::flash('login_error', 'Invalid credentials');
        }
    }
}
}
