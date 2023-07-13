<?php

namespace App\Http\Controllers;

use App\Models\JopListing;
use App\Models\User;
use Illuminate\Http\Request;

class JopDashboardController extends Controller
{
    public function index()
    {
        $jopsListings = JopListing::all();
        return view('dashboard.jopdashboard.jops', compact('jopsListings'));
    }
    public function jopDashboard()
{
    $user = auth()->user();
    $jopsListings = JopListing::all(); // Replace this with your actual jop listings data retrieval logic

    return view('dashboard.jopdashboard.jops', compact('user', 'jopsListings'));
}



    public function destroy($id)
    {
        $jop = JopListing::findOrFail($id);
        $jop->delete();

        // Add any additional logic or redirect as needed

        return redirect()->back();
    }
}
