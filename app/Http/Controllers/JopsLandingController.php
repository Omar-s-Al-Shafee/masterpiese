<?php

namespace App\Http\Controllers;

use App\Models\JopListing;
use Illuminate\Http\Request;

class JopsLandingController extends Controller
{
    public function jopsLanding(Request $request)
    {
        $query = JopListing::query();

        // Apply filters to the query
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('job_title', 'LIKE', "%$searchTerm%");
        }

        if ($request->has('filter_time')) {
            $timeFilter = $request->input('filter_time');
            // Apply the time filter logic
        }

        if ($request->has('filter_company')) {
            $companyFilter = $request->input('filter_company');
            // Apply the company filter logic
        }

        if ($request->has('filter_salary')) {
            $salaryFilter = $request->input('filter_salary');
            // Apply the salary filter logic
        }

        if ($request->has('filter_location')) {
            $locationFilter = $request->input('filter_location');
            // Apply the location filter logic
        }

        if ($request->has('filter_job_type')) {
            $jobTypeFilter = $request->input('filter_job_type');
            // Apply the job type filter logic
        }

        if ($request->has('filter_experience_level')) {
            $experienceLevelFilter = $request->input('filter_experience_level');
            // Apply the experience level filter logic
        }

        if ($request->has('filter_onsite_remote')) {
            $onsiteRemoteFilter = $request->input('filter_onsite_remote');
            // Apply the on-site/remote filter logic
        }

        // Retrieve the filtered job listings
        $jopListings = $query->get();

        return view('landingPage.jops-landing', compact('jopListings'));
    }
}