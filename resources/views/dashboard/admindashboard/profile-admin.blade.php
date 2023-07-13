@extends('dashboard.layoutDash.master')

@section('content')
<div class="profileAdminPage">
    <div class="adminCard">
        <h2>Profile Admin</h2>
        <div class="adCard">
            <img src="{{ asset('storage/' . $user->img_profile) }}" alt="Profile Image">

            <h3>{{ $user->name }}</h3>
        </div>
    </div>
    <div class="adminInfo">
        <h2>Admin Info</h2>
        <div class="adInfo">
            <h4>Name :</h4>
            <h4>{{ $user->name }}</h4>
            <h4>Email :</h4>
            <h4>{{ $user->email }}</h4>
            <a href="{{ route('admin-profile.edit') }}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Edit Profile
            </a>
        </div>
    </div>
</div>
@endsection
