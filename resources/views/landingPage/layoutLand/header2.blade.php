<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search People</title>
    <link rel="stylesheet" href="{{ asset('people-landing.css') }}">
    <link rel="stylesheet" href="{{ asset('style-landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset("jops-landing.css") }}">
    <link rel="icon" href="{{ asset('images/logo2.png') }}">

</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
          <a href="{{ route('landingPage') }}" class="navbar-logo"><img src="{{ asset('images/logo-white.png') }}" ></a>

          
          {{-- @if(Route::currentRouteName() !== 'peopleLanding' ) --}}
          <form id="search-form" action="{{ route('searchUsers') }}" method="POST">
            @csrf
            <input type="text" id="search-input" name="name" placeholder="Search">
            <button type="submit" id="search-button"><img src="{{ asset('images/search.png') }}" alt=""></button>
        </form>
        
          {{-- @endif --}}
          
        
</div>

        
        </div>
        <div class="navbar-center">
            
          <div class="navbar">
          <div class="navbar-toggle" onclick="toggleMenu()">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <div class="navbar-menu" id="menu">
            <ul>
              <li><a href="{{ route('signIn') }}""><img src="{{ asset('images/login_FILL0_wght400_GRAD0_opsz48.png') }}" style="margin-right: 5px;"><span>Login</span></a></li>
              <li><a href="{{ route('joinNow') }}"><img src="{{ asset('images/icons8-registration-64.png') }}" style="margin-right: 5px;"><span>Sign up</span></a></li>
            </ul>
            </div>
          </div>
        </div>
    </nav>