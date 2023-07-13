<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png">
    <title>ISLA</title>
    <link rel="stylesheet" href="{{ asset('homePage.css') }}" >
<link rel="stylesheet" href="{{ asset('profilePage.css') }}" >
<link rel="stylesheet" href="{{ asset('peopleProfile.css') }}" >
<link rel="stylesheet" href="{{ asset('jopsProfile.css') }}">
<link rel="stylesheet" href="{{ asset('contact.css') }}" >
<link rel="stylesheet" href="{{ asset('company-profile.css') }}">
<link rel="stylesheet" href="{{ asset('commint.css') }}" >

</head>
<body>
    

    <nav class="navbar">
        <div class="navbar-left">
            <a href="{{ route ('homepage')}}" class="navbar-logo"><img src="{{ asset('images/logo.png') }}" ></a>

            <div class="searsh-box">
                @if(Route::currentRouteName() !== 'jops-profile')
                    <img src="{{ asset('images/search.png') }}" alt="">
                    <input type="text" placeholder="search">
                @endif
            </div>

        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="{{ route('homepage') }}" class="active-link"><img src="{{ asset ('images/home.png')}}" ><span>Home</span></a></li>
                
                <li><a href="{{ route('peopleProfile') }}"><img src="{{ asset('images/network.png') }}"><span>My Network</span></a></li>
                
                <li><a href="{{ route('jops-profile') }}"><img src="{{ asset('images/jobs.png') }}" ><span>Jops</span></a></li>
                
                <li><a href="{{ route('page-notfound') }}"><img src="{{ asset('images/message.png') }}" ><span>Messaging</span></a></li>
                
                <li><a href=""><img src="{{ asset('images/notification.png') }}" ><span>Notification</span></a></li>
                
            </ul>
        </div>
        <div class="navbar-right">
            <div class="online">
                <img src="{{ asset('images/user-1.png') }}"user class="nav-profile-img" onclick="toggleMenu()">
            </div>
        </div>
        <!-- ----------------profile-drop-down-menu--------- -->
        <div class="profile-menu-wrap" id="profileMenu">
            <div class="profile-menu">
                <div class="user-info">
                    <img src="{{ asset('images/user-1.png') }}" alt="">
                    <div>
                        <h3>Omar Al-shafee</h3>
                        <a href="{{ route('profile') }}">See your profile</a>
                    </div>
                </div>
                <hr>
                <a href="{{ route('contactUs') }}" class="profile-menu-link">
                    <img src="{{ asset('images/feedback.png') }}" alt="">
                    <p>Give Feedback</p>
                    <span>></span>
                </a>
                <a href="" class="profile-menu-link">
                    <img src="{{ asset('images/setting.png') }}" alt="">
                    <p>Setting & Privacy</p>
                    <span>></span>
                </a>
                <a href="" class="profile-menu-link">
                    <img src="{{ asset('images/help.png') }}" alt="">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="" class="profile-menu-link">
                    <img src="{{ asset('images/display.png') }}" alt="">
                    <p>Display & Accessiblity</p>
                    <span>></span>
                </a>
                @if(Auth::check())
                <a href="{{ route('logout') }}" class="profile-menu-link">
                    @endif
                    <img src="{{ asset('images/logout.png') }}" alt="">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>

        </div>




    </nav>