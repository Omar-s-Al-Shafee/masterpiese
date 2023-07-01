@extends('homePages.layoutHome.master1')
@section('content')
    <!-- /* ------------- navbar end --------------------- */-->
<div class="container">
    <div class="profile-main">
        <div class="profile-container">
            <img src="images/cover-pic.png" width="100%">
            <div class="profile-container-inner">
                <img src="images/user-1.png" class="profile-pic">
                <h1>Omar Al-Shafee</h1>
                <p>Web Developer at Microsoft I Former developer at DataStack and Intern at Oracle</p>
                <p>San Francisco, United States &middot; <a href="#">Contact info</a></p>
                    <div class="mutual-connection">
                        <img src="images/user-2.png" alt="">
                        <span>1 mutual connection: Orlando Diggs </span>
                    </div>
                <div class="profile-btn">
                    <a href="#" class="primery-btn"><img  src="images/connect.png" alt="">Connect</a>
                    <a href="#"><img src="images/chat.png" alt="">Message</a>
                </div>
            </div>
        </div>
        <div class="profile-description">
            <h2>About</h2>
            <p>The success of every websites depends on search engine optimisation and digital
                marketing strategy. If you are on first page of all major search engines then you
                are ahead among your competitors on first page of all major search engines then you
                are ahead among your competitors.</p>
                <a href="#" class="see-more-link">See more...</a>
        </div>
        <div class="profile-description">
            <h2>Experience</h2>
            <div class="profile-desc-row">
                <img src="images/microsoft.png">
                <div>
                    <h3>Lead Front-End Developer</h3>
                    <b>Microsoft &middot; Full-time</b>
                    <b>Feb 2021 - present &middot; 1.5 years</b>
                    <p>Computer programming is the process of performing a particular
                        computation, usually by designing and building an executable computer
                        program.</p>
                        <hr>
                </div>
            </div>
            <div class="profile-desc-row">
                <img src="images/slack.png">
                <div>
                    <h3>Full Stack Developer</h3>
                    <b>Slack &middot; Full-time</b>
                    <b>Feb 2021 - present &middot; 1.5 years</b>
                    <p>Computer programming is the process of performing a particular
                        computation, usually by designing and building an executable computer
                        program.</p>
                        <hr>
                </div>
            </div>
            <div class="profile-desc-row">
                <img src="images/google.png">
                <div>
                    <h3>Web Developer</h3>
                    <b>Google Inc &middot; Full-time</b>
                    <b>Feb 2021 - present &middot; 1.5 years</b>
                    <p>Computer programming is the process of performing a particular
                        computation, usually by designing and building an executable computer
                        program.</p>
                        
                </div>
            </div>
            <hr>
            <a class="experience-link" href="#">Show all 7 experiences <img src="images/right-arrow.png" alt=""></a>
        </div>
        <div class="profile-description">
            <h2>Education</h2>
            <div class="profile-desc-row">
                <img src="images/stanford.png" alt="">
                <div>
                    <h3>Stanford University</h3>
                    <b>BSEE, Electrical Engineering</b>
                    <b>Sept 2018 - Dec 2019</b>
                    <hr>
                </div>
            </div>
            <div class="profile-desc-row">
                <img src="images/north.png" alt="">
                <div>
                    <h3>Northwestern University</h3>
                    <b>Computer Science</b>
                    <b>Sept 2015 - Dec 2017</b>
                    <hr>
                </div>
            </div>
            <div class="profile-desc-row">
                <img src="images/mit.png" alt="">
                <div>
                    <h3>Harvard University</h3>
                    <b>Senior High School</b>
                    <b>Sept 2005 - Dec 2014</b>
                    <hr>
                </div>
            </div>
        </div>
        <div class="profile-description">
            <h2>Skills</h2>
            <a href="#" class="skills-btn">Laedership</a>
            <a href="#" class="skills-btn">Web Design</a>
            <a href="#" class="skills-btn">Development</a>
            <a href="#" class="skills-btn">Communication</a>
            <a href="#" class="skills-btn">UX/UI</a>
            <a href="#" class="skills-btn">Planning</a>
            <a href="#" class="skills-btn">Coding</a>
            <a href="#" class="skills-btn">JavaScript</a>
            <a href="#" class="skills-btn">Python</a>
            <a href="#" class="skills-btn">Enterprenuorship</a>
        </div>
        <div class="profile-description">
            <h2>Languages</h2>
            <a href="#" class="language-btn">English</a>
            <a href="#" class="language-btn">German</a>
        </div>
    </div>
    <!-- --------------profile-sidebar------------ -->
    <div class="profile-sidebar">
        <div class="sidebar-ad">
            <small>Ad &middot; &middot; &middot;</small>
            <p>Master the 5 priciples of web design</p>
            <div>
                <img src="images/user-1.png" >
                <img src="images/mi-logo.png" >
            </div>
            <p>Brand and Demand in Xiaomi</p>
            <a href="#" class="ad-link">Learn More</a>
        </div>
        <div class="sidebar-people">
            <h3>People you may know</h3>
            <div class="sidebar-people-row">
                <img src="images/user-3.png" >
                <div>
                    <h2>Samuel Tony</h2>
                    <p>Head of Marketing at Alibaba</p>
                    <a href="">Connect</a>
                </div>
            </div>
            <div class="sidebar-people-row">
                <img src="images/user-4.png" >
                <div>
                    <h2>Benjamin Leo</h2>
                    <p>Head of Marketing at Alibaba</p>
                    <a href="">Connect</a>
                </div>
            </div>
            <div class="sidebar-people-row">
                <img src="images/user-5.png" >
                <div>
                    <h2>Steave Greg</h2>
                    <p>Head of Marketing at Alibaba</p>
                    <a href="">Connect</a>
                </div>
            </div>
            <div class="sidebar-people-row">
                <img src="images/user-2.png" >
                <div>
                    <h2>Martin Lewis</h2>
                    <p>Head of Marketing at Alibaba</p>
                    <a href="">Connect</a>
                </div>
            </div>
            <div class="sidebar-people-row">
                <img src="images/user-1.png" >
                <div>
                    <h2>Omar Al-Shafee</h2>
                    <p>Head of Marketing at Alibaba</p>
                    <a href="">Connect</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection