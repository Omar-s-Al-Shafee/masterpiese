@extends('dashboard.layoutDash.master')
@section('content')

            <div class="profileAdminPage">
            <div class="adminCard">
                <h2>Profile Admin</h2>
                <div class="adCard">
                    <img src=" {{ $user->img_profile }}" alt="">
                    <h3>{{ $user->name }}</h3>
                    <p><i class="fas fa-map-marker-alt"></i>{{ $user->city }},{{ $user->country }}</p>
                </div>
            </div>
            <div class="adminInfo">
                <h2>Admin Info</h2>
                <div class="adInfo">
                    
                    <h4>Name :</h4>
                    <h4>{{ $user->name }}</h4>
                    <h4>Email :</h4>
                    <h4>{{ $user->email }}</h4>
                    <h4>Major :</h4>
                    <h4>{{ $user->major }}</h4>
                    <h4>City :</h4>
                    <h4>{{ $user->city }}</h4>
                    <h4>Country :</h4>
                    <h4>{{ $user->country }}</h4>
                    <h4>Address : </h4>
                    <h4>{{ $user->address }}</h4>
                
                    <a href="{{ route('edit-admin-profile') }}">
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