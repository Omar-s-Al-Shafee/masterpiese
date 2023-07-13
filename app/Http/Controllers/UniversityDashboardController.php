<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class UniversityDashboardController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('dashboard.universitydashboard.university', compact('universities'));
    }

    public function create()
    {   $universities = University::all();
        
        return view('dashboard.universitydashboard.add-university');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        // 'name_university' => 'required',
        // 'location' => 'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Store the uploaded image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/universities'), $imageName);
    } else {
        $imageName = null;
    }

    $university = new University;
    $university->name = $request->input('name_university');
    $university->location = $request->input('location');
    $university->image = 'images/universities/' . $imageName;
    $university->save();

    // After saving, redirect back to the university index page
    return redirect()->route('universitydashboard.university');
}




public function edit($id)
{
    $university = University::findOrFail($id);
    return view('dashboard.universitydashboard.edit-university', compact('university'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        // 'name_university' => 'required',
        // 'location' => 'required',
        // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $university = University::findOrFail($id);

    // Update the university data
    $university->name = $request->input('name_university');
    $university->location = $request->input('location');

    // Store the uploaded image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images/universities'), $imageName);
        $university->image = 'images/universities/' . $imageName;
    }

    $university->save();

    // After updating, redirect back to the university index page
    return redirect()->route('universitydashboard.university');
}


    public function destroy($id)
    {
        $university = University::findOrFail($id);
        // Add logic to delete the university

        // After deleting, redirect back to the university index page
        return redirect()->route('universitydashboard.university');
    }
}
