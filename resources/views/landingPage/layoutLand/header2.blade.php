<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search People</title>
    <link rel="stylesheet" href="people-landing.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
  <a href="landing page.html"  class="navbar-logo"><img src="images/logo-white.png"></a>
  
  <div class="search-box">
    <form id="search-form" onsubmit="showResults(); return false;">
        
      <input type="text" id="search-input" placeholder="Search">
      <button type="submit" id="search-button"><img src="images/search.png" alt=""></button>
    </form>
  </div>
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
                <li><a href="sign up.html"><img src="images/icons8-registration-64.png" width="20px" style="margin-right: 5px;"><span>Join Now</span></a></li>
                <li><a href="sign in.html"><img src="images/login_FILL0_wght400_GRAD0_opsz48.png" style="margin-right: 5px;"><span>Login</span></a></li>
            </ul>
            </div>
          </div>
        </div>
    </nav>