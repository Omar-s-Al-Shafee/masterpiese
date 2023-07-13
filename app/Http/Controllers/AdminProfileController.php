<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller

{
    public function profile()
{
    $user = auth()->user();

    return view('dashboard.admindashboard.profile-admin', compact('user'));
}
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.admindashboard.profile-admin', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('dashboard.admindashboard.edit-profile-admin', compact('user'));
    }

    public function update(Request $request)
{
    $user = User::find(Auth::id());
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('profile_images', 'public');
        $user->img_profile = $imagePath;
    }

    $user->save();

    return redirect()->route('admin-profile.show')->with('success', 'Profile updated successfully.');
}

}
