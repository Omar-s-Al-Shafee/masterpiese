<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class FeedDashboardController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('dashboard.feeddashboard.feedback', compact('feedbacks'));
    }
}
