@extends('landingPage.layoutLand.master')
@section('content')
    <div class="container">
      <div class="box">
        <div class="form">
          <form action="" method="post" onsubmit="return validateForm()">
            <h2>Sign Up</h2>
            <div class="input-box">
              <span class="icon_login"></span>
              <input type="text" id="full-name" name="full-name" required="required" />
              <span>Full Name</span>
              <i></i>
            </div>
            <div id="full-name-error" class="error-message" ></div>
            <div class="input-box">
              <span class="icon_login"></span>
              <input type="text" id="email" name="email" required="required"/>
              <span>Email</span>
              <i></i>
            </div>
            <div id="email-error" class="error-message"></div>
            <div class="input-box">
              <span class="icon_login"></span>
              <input type="password" name="password" id="password" class="password-field"  required="required">
              <span>Password</span>
              <i></i>
              
            </div>
            <div id="password-error" class="error-message"></div>
            <div class="input-box">
              <span class="icon_login"></span>
              <input type="password" id="confirm-password"  name="confirm-password" required="required">
              <span>Confirm Password</span>
              <i ></i>
            </div>
            <div id="confirm-password-error" class="error-message"></div> 
            <div class="links">
              
              <a href="sign in.html">Signin</a>
            </div>
            <button type="submit" class="but-1">Signup</button>
        </form>
        </div>
      </div>
    </div>
@endsection