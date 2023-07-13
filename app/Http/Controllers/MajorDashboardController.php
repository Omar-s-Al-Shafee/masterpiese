<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class MajorDashboardController extends Controller
{
    public function index()
    {
        $majors = Major::with('university')->get();
        return view('dashboard.majordashboard.major', compact('majors'));
    }

    public function create()
    {
        $universities = University::all();
        return view('dashboard.majordashboard.add-major', compact('universities'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name-major' => 'required',
            'university-name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('majors', 'public');

        // Get the university by its ID
        $universityId = $request->input('university-name');
        $university = University::find($universityId);

        if (!$university) {
            // Handle the case where the university does not exist
            return redirect()->back()->with('error', 'University not found.');
        }

        // Create a new Major instance and assign the values
        $major = new Major;
        $major->name = $request->input('name-major');
        $major->university_id = $universityId;
        $major->image = $imagePath;
        $major->save();

        return redirect()->route('majordashboard.major')->with('success', 'Major added successfully.');
    }

    public function edit($id)
{
    $major = Major::findOrFail($id);
    $universities = University::all();
    return view('dashboard.majordashboard.edit-major', compact('major', 'universities'));
}


public function update(Request $request, $id)
{
    $major = Major::findOrFail($id);

    $validatedData = $request->validate([
        // 'name-major' => 'required',
        // 'university-name' => 'required',
        // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update the major data
    $major->name = $request->input('name-major');
    $major->university_id = $request->input('university-name');

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('majors', 'public');
        $major->image = $imagePath;
    }

    $major->save();

    return redirect()->route('majordashboard.major')->with('success', 'Major updated successfully.');
}



    public function destroy(Major $major)
    {
        // Delete the associated image
        if ($major->image) {
            Storage::disk('public')->delete($major->image);
        }

        $major->delete();
        return redirect()->route('majordashboard.index')->with('success', 'Major deleted successfully.');
    }
}
