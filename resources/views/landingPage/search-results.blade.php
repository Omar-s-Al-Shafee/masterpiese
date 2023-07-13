@extends('landingPage.layoutLand.master1')

@section('content')
@if (isset($users) && $users->count() > 0)
    <div class="grid-layout" style="padding:  20px">
        @foreach ($users as $user)
            <div class="card-search" style="border: 1px #000 solid">
                <img class="profile-cover" src="{{ asset($user->img_cover) }}" alt="">
                <div class="profile-container-inner">
                    <img src="{{ asset($user->img_profile) }}" class="profile-pic">
                    <h1>{{ $user->name }}</h1>
                    {{-- Display additional user information as needed --}}
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No results found.</p>
@endif
@endsection
