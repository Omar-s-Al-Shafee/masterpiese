<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\JopListing;
use App\Models\Post;
use App\Models\University;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalCompanies = Company::count();
        $totalJobs = JopListing::count();
        $totalPosts = Post::count();

        $users = User::all()->take(3);
        $companies = Company::all()->take(3);
        $jopsListings = JopListing::all()->take(3);
        $posts = Post::all()->take(3);
        $universities = University::all()->take(3);

        return view('dashboard.layoutDash.index', compact('totalUsers', 'totalCompanies', 'totalJobs', 'totalPosts', 'users', 'companies', 'jopsListings', 'posts', 'universities'));
    }

    public function deleteUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function deleteCompany(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->back()->with('success', 'Company deleted successfully.');
    }

    public function deleteJopListing(Request $request, $id)
    {
        $jopListing = JopListing::findOrFail($id);
        $jopListing->delete();

        return redirect()->back()->with('success', 'Job listing deleted successfully.');
    }

    public function deletePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
    public function deleteUniversity(Request $request, $id)
    {
        $university = University::findOrFail($id);
        $university->delete();

        return redirect()->back()->with('success', 'University deleted successfully.');
    }
}
