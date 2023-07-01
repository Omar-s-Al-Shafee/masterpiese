@extends('homePages.layoutHome.master2')
@section('content')
    <!-- /* ------------- navbar end --------------------- */ -->
    <div class="column">
    <div class="header">
        <p>Contact Us</p>
        <h1>Get In Touch</h1>
    </div>
    <div class="cardUS">
        <div class="right">
            <img src="images/call-center.png" alt="">
            <h2>Call Us</h2>
            <h3>+962777683610</h3>
        </div>
        <div class="center">
            <img src="images/email.png" alt="">
            <h2>Email Us</h2>
            <h3>omar.s.alshafee@gmail.com</h3>
        </div>
        <div class="left">
            <img src="images/pin_7108024.png" alt="">
            <h2>Location</h2>
            <h3>Kalda,Amman,Jordan</h3>
        </div>
    </div>
    <div class="contactUs">
        <div class="form">
            <h2>Contact Us</h2>
            <form action="">
                <div class="input-box">
                    <span class="icon_login"></span>
                    <input type="text" id="full-name" name="full-name" required="required" />
                    <span>Full Name</span>
                    <i></i>
                  </div>
                  <div class="input-box">
                    <span class="icon_login"></span>
                    <input type="text" id="full-name" name="full-name" required="required" />
                    <span>Email Address</span>
                    <i></i>
                  </div>
                  <!-- <div id="full-name-error" class="error-message" ></div> -->
                  
                  <!-- <div id="full-name-error" class="error-message" ></div> -->
                  <div class="input-box">
                    <span class="icon_login"></span>
                    <input type="text" id="full-name" name="full-name" required="required" />
                    <span>Query Topic</span>
                    <i></i>
                  </div>
                  <div class="input-box">
                    <span class="icon_login"></span>
                    <input type="text" id="full-name" name="full-name" required="required" />
                    <span>Phone Number</span>
                    <i></i>
                  </div>
                  <!-- <div id="full-name-error" class="error-message" ></div> -->
                  
                  <!-- <div id="full-name-error" class="error-message" ></div> -->
                  <div class="input-box">
                    <span class="icon_login"></span>
                    <textarea type="text" id="full-name" name="full-name" required="required"></textarea>
                    <span>Your message</span>
                    <i></i>
                  </div>
                  <button type="submit">Send Massage</button>
                  <!-- <div id="full-name-error" class="error-message" ></div> -->
            </form>
        </div>
        
    </div>
@endsection
    
    
    
    
            