<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isla:Log In or Sign Up</title>
    <link rel="stylesheet" href="{{ asset('style-landing-page.css') }}">
    <link rel="icon" href="{{ asset('images/logo2.png') }}">

    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <script src="path/to/bootstrap/js/jquery.min.js"></script>
<script src="path/to/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css" integrity="sha384-REPLACE-WITH-ACTUAL-INTEGRITY-CHECK" crossorigin="anonymous">



</head>
<body>
  <nav class="navbar">
    <div class="navbar-left">
      <a href="{{ route('landingPage') }}" class="navbar-logo"><img src="{{ asset('images/logo-white.png') }}" ></a>

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
          <li><a href="{{ route('people-landing') }}"><img src="{{ asset('images/network.png') }}"><span>People</span></a></li>
          <li><a href="{{ route('jops-landing') }}"><img src="{{ asset('images/jobs.png') }}"><span>Jobs</span></a></li>
          <li><a href="{{ route('signIn') }}"><img src="{{ asset('images/login_FILL0_wght400_GRAD0_opsz48.png') }}" style="margin-right: 5px;"><span>Login</span></a></li>
          <li><a href="{{ route('joinNow') }}"><img src="{{ asset('images/icons8-registration-64.png') }}" style="margin-right: 5px;"><span>Sign up</span></a></li>
        </ul>
        </div>
      </div>
    </div>
</nav>