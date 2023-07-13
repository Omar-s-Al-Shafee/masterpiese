@extends('landingPage.layoutLand.master1')

@section('content')

    <div id="search-filters">
        <div class="filter" style="margin-right: 20px">
            <form action="{{ route('filter') }}" id="search-form" method="GET">
                @csrf
                <input type="text" name="search" id="search-input" placeholder="Search by job title">
                <button type="submit" id="search-button"><img src="{{ asset('images/search.png') }}" alt="" style="width: 30px"></button>
            </form>
        </div>
        <div class="filter">
            <select id="filter-time" name="filter_time">
                <option value="any-time">Any Time</option>
                <option value="past-24-hours">Past 24 Hours</option>
                <option value="past-week">Past Week</option>
                <option value="past-month">Past Month</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="filter">
            <select name="filter_company" id="filter-company">
                <option value="" disabled selected hidden>Company</option>
                <option value="Orange">Orange</option>
            </select>
        </div>
        <div class="filter">
            <select name="filter_salary" id="filter-salary" class="">
                <option value="" disabled selected hidden>Salary</option>
                <option value="$40,000+">$40,000+</option>
                <option value="$60,000+">$60,000+</option>
                <option value="$80,000+">$80,000+</option>
                <option value="$100,000+">$100,000+</option>
                <option value="$120,000+">$120,000+</option>
            </select>
        </div>
        <div class="filter">
            <select id="filter-location" name="filter_location">
                <option value="" disabled selected hidden>Location</option>
                <option value="Amman,JO">Amman,JO</option>
            </select>
        </div>
        <div class="filter">
            <select name="filter_job_type" id="filter-jop-type">
                <option value="" disabled selected hidden>Job Type</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Contract">Contract</option>
                <option value="Temporary">Temporary</option>
                <option value="Internship">Internship</option>
            </select>
        </div>
        <div class="filter">
            <select name="filter_experience_level" id="experience-level">
                <option value="" disabled selected hidden>Experience Level</option>
                <option value="Internship">Internship</option>
                <option value="Entry level">Entry level</option>
                <option value="Associate">Associate</option>
                <option value="Mid-Senior level">Mid-Senior level</option>
                <option value="Director">Director</option>
            </select>
        </div>
        <div class="filter">
            <select name="filter_onsite_remote" id="on-site-remote">
                <option value="" disabled selected hidden>On-Site/Remote</option>
                <option value="Remote">Remote</option>
                <option value="Hybrid">Hybrid</option>
                <option value="On-Site">On-Site</option>
            </select>
        </div>
    </div>

    <div class="container">
        <div id="search-results">
            @isset($jopListings)
                @foreach ($jopListings as $jopListing)
                    <div class="job-card">
                        <div class="company-logo">
                            <img src="{{ asset($jopListing->image) }}" alt="Company Logo">
                        </div>
                        <div class="job-details">
                            <h2 class="job-title">{{ $jopListing->job_title }}</h2>
                            {{-- <p class="company-name">{{ $jopListing->company->name }}</p> --}}
                            <p class="job-location">{{ $jopListing->location }}</p>
                            <p class="job-description">{{ $jopListing->job_description }}</p>
                            <div class="apply-button">
                                <a href="#" class="btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
