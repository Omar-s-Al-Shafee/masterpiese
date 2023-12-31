<!DOCTYPE html>
<html lang="en" >

  <meta charset="UTF-8">
  <title>Login ISLA</title>
  <link rel="stylesheet" href="{{ asset('style-signin.css') }}">
  <link rel="stylesheet" href="{{ asset('style_signup.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="icon" href="{{ asset('images/logo2.png') }}">


</head>
<body>
  <nav class="navbar">
    <div class="navbar-left">
      <a href="{{ route('landingPage') }}" class="navbar-logo"><img src="{{ asset('images/logo-white.png') }}" ></a>

    </div>
    <div class="navbar-center">
      
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
    
</nav>