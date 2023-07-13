<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('dashboard.userdashboard.user', compact('users'));
    }

    public function create(Request $request)
    {
        return view('dashboard.userdashboard.add-user');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'password' => 'required|min:8|confirmed',
            // 'confirm_password' => 'required',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->confirm_password = $request->input('confirm_password');
        $user->role_id = 2; // Assuming the default role for join now users is 2
        $user->save();
    
        // Redirect the user back to the user.blade.php page with success message
        return redirect()->route('userdashboard.user')->with('success', 'User created successfully.');
    }
    

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.userdashboard.edit-user', compact('user'));
    }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'full-name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'required|min:8',
        'confirm-password' => 'required|same:password',
    ]);

    $user->name = $request->input('full-name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    // Set a success message in the session
    Session::flash('success', 'User updated successfully');

    // Redirect the user to the appropriate page
    return redirect()->route('userdashboard.user');
}


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
