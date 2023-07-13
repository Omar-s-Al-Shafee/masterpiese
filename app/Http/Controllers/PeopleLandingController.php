<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PeopleLandingController extends Controller
{
    public function peopleLanding()
    {
        return view('landingPage.people-landing');
    }

    public function searchUsers(Request $request)
{
    $searchTerm = $request->input('name');
    $users = User::where('name', 'LIKE', "%{$searchTerm}%")->get();
    
    return view('landingPage.search-results')->with('users', $users);
}


}



    




