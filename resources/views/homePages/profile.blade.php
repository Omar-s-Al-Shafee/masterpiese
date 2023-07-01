@extends('homePages.layoutHome.master1')
@section('content')
    <!-- /* ------------- navbar end --------------------- */-->
<div class="container">
    <div class="profile-main">
        <div class="profile-container">
            <img src="{{ asset('images/cover-pic.png') }}" width="100%">
            <div class="profile-container-inner">
                <img src="{{ asset('images/user-1.png') }}" class="profile-pic">
                <h1>{{ $user->name }}</h1>
                <p>Web Developer at Microsoft I Former developer at DataStack and Intern at Oracle</p>
                <p>San Francisco, United States &middot; <a href="#">Contact info</a></p>
                <div class="mutual-connection">
                    <img src="images/user-2.png" alt="">
                    <span>1 mutual connection: Orlando Diggs</span>
                </div>
                <div class="profile-btn">
                    <a href="#" class="primery-btn" onclick="openEditPopup()"><i class="fas fa-pen"></i>Edit Profile</a>
                </div>
            </div>
        </div>
    
        <!-- Popup for editing profile information -->
        <div id="editProfilePopup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
                <h2>Edit Profile</h2>
                <form action="" method="post">
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="email" id="email" name="email" placeholder="Email" >
                    <input type="text" id="address" name="address" placeholder="Address">
                    <input type="file" id="coverImg" name="coverImg" placeholder="Background Photo">
                    <input type="file" id="profileImg" name="profileImg" placeholder="Profile Photo">
                    <button id="save-profile-btn">Save</button>
                </form>
            </div>
        </div>
        <div class="profile-description">
            <div class="editDescription">
              <h2>About</h2>
              <div class="edit-icons">
                <a href="#" class="edit-btn" data-popup="edit-about-popup"><i class="fas fa-pen"></i></a>
                <a href="#" class="add-btn" data-popup="add-about-popup"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <p id="about-text">The success of every website depends on search engine optimization and digital marketing strategy. If you are on the first page of all major search engines, then you are ahead of your competitors.</p>
          </div>
          
          <div id="edit-about-popup" class="popup">
            <div class="popup-content">
              <a href="#" class="close-btn">&times;</a>
              <form action="" method="post">
              <textarea id="about-textarea" placeholder="About"></textarea>
              <button id="save-about-btn">Save</button>
            </form>
            </div>
          </div>
          
          <div id="add-about-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
                <form action="" method="post">
              <textarea id="add-about-textarea" placeholder="About"></textarea>
              <button id="add-about-btn">Add</button>
            </form>
            </div>
          </div>
          
          
          <div class="profile-description">
            <div class="editDescription">
              <h2>Experience</h2>
              <div class="edit-icons">
                <a href="#" class="edit-btn" data-popup="edit-experience-popup"><i class="fas fa-pen"></i></a>
                <a href="#" class="add-btn" data-popup="add-experience-popup"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="profile-desc-row">
              <img src="images/microsoft.png">
              <div>
                <h3>Lead Front-End Developer</h3>
                <b>Microsoft &middot; Full-time</b>
                <b>Feb 2021 - present &middot; 1.5 years</b>
                <p>Computer programming is the process of performing a particular computation, usually by designing and building an executable computer program.</p>
                <hr>
              </div>
            </div>
            <!-- Add more experience items here -->
          </div>
          
          <div id="edit-experience-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Edit Experience</h2>
              <form action="" method="post">
              <input type="text" id="experience-title" placeholder="Title">
              <input type="text" id="experience-employment" placeholder="Employment">
              <input type="text" id="experience-company" placeholder="Company">
              <input type="text" id="experience-location" placeholder="Location">
              <input type="text" id="experience-location-type" placeholder="Location Type">
              <input type="date" id="experience-start-date" placeholder="Start Date">
              <input type="date" id="experience-end-date" placeholder="End Date">
              <input type="text" id="experience-industry" placeholder="Industry">
              <textarea id="experience-description" placeholder="Description"></textarea>
              <input type="text" id="experience-profile-headline" placeholder="Profile Headline">
              <button id="save-experience-btn">Save</button>
            </form>
            </div>
          </div>
          
          <div id="add-experience-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Add Experience</h2>
              <form action="" method="post">
              <input type="text" id="add-experience-title" placeholder="Title">
              <input type="text" id="add-experience-employment" placeholder="Employment">
              <input type="text" id="add-experience-company" placeholder="Company">
              <input type="text" id="add-experience-location" placeholder="Location">
              <input type="text" id="add-experience-location-type" placeholder="Location Type">
              <input type="text" id="add-experience-start-date" placeholder="Start Date">
              <input type="text" id="add-experience-end-date" placeholder="End Date">
              <input type="text" id="add-experience-industry" placeholder="Industry">
              <textarea id="add-experience-description" placeholder="Description"></textarea>
              <input type="text" id="add-experience-profile-headline" placeholder="Profile Headline">
              <button id="add-experience-btn">Add</button>
            </form>
            </div>
          </div>
          
          <div class="profile-description">
            <div class="editDescription">
              <h2>Education</h2>
              <div class="edit-icons">
                <a href="#" class="edit-btn" data-popup="edit-education-popup"><i class="fas fa-pen"></i></a>
                <a href="#" class="add-btn" data-popup="add-education-popup"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="profile-desc-row">
              <img src="images/stanford.png" alt="">
              <div>
                <h3>Stanford University</h3>
                <b>BSEE, Electrical Engineering</b>
                <b>Sept 2018 - Dec 2019</b>
                <hr>
              </div>
            </div>
            <!-- Add more education items here -->
          </div>
          
          <div id="edit-education-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Edit Education</h2>
              <form action="" method="post">
              <input type="text" id="education-school" placeholder="School">
              <input type="text" id="education-degree" placeholder="Degree">
              <input type="text" id="education-field-of-study" placeholder="Field of Study">
              <input type="text" id="education-start-date" placeholder="Start Date">
              <input type="text" id="education-end-date" placeholder="End Date">
              <input type="text" id="education-grade" placeholder="Grade">
              <textarea id="education-description" placeholder="Description"></textarea>
              <button id="save-education-btn">Save</button>
            </form>
            </div>
          </div>
          
          <div id="add-education-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Add Education</h2>
              <form action="" method="post">
              <input type="text" id="add-education-school" placeholder="School">
              <input type="text" id="add-education-degree" placeholder="Degree">
              <input type="text" id="add-education-field-of-study" placeholder="Field of Study">
              <input type="text" id="add-education-start-date" placeholder="Start Date">
              <input type="text" id="add-education-end-date" placeholder="End Date">
              <input type="text" id="add-education-grade" placeholder="Grade">
              <textarea id="add-education-description" placeholder="Description"></textarea>
              <button id="add-education-btn">Add</button>
            </form>
            </div>
          </div>
          
          <div class="profile-description">
            <div class="editDescription">
              <h2>Skills</h2>
              <div class="edit-icons">
                <a href="#" class="edit-btn" data-popup="edit-skills-popup"><i class="fas fa-pen"></i></a>
                <a href="#" class="add-btn" data-popup="add-skills-popup"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <a href="#" class="skills-btn">Leadership</a>
            <a href="#" class="skills-btn">Web Design</a>
            <a href="#" class="skills-btn">Development</a>
            <a href="#" class="skills-btn">Communication</a>
            <a href="#" class="skills-btn">UX/UI</a>
            <a href="#" class="skills-btn">Planning</a>
            <a href="#" class="skills-btn">Coding</a>
            <a href="#" class="skills-btn">JavaScript</a>
            <a href="#" class="skills-btn">Python</a>
            <a href="#" class="skills-btn">Entrepreneurship</a>
          </div>
          
          <div id="edit-skills-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Edit Skills</h2>
              <form action="" method="post">
              <input type="text" id="skills-skill" placeholder="Skill">
              <button id="save-skills-btn">Save</button>
            </form>
            </div>
          </div>
          
          <div id="add-skills-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Add Skills</h2>
              <form action="" method="post">
              <input type="text" id="add-skills-skill" placeholder="Skill">
              <button id="add-skills-btn">Add</button>
            </form>
            </div>
          </div>
          
          <div class="profile-description">
            <div class="editDescription">
              <h2>Languages</h2>
              <div class="edit-icons">
                <a href="#" class="edit-btn" data-popup="edit-languages-popup"><i class="fas fa-pen"></i></a>
                <a href="#" class="add-btn" data-popup="add-languages-popup"><i class="fas fa-plus"></i></a>
              </div>
            </div>
            <!-- Language items here -->
            <a href="#" class="language-btn">English</a>
            <a href="#" class="language-btn">German</a>

          </div>
          
          <div id="edit-languages-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Edit Languages</h2>
              <form action="" method="post">
              <input type="text" id="languages-language" placeholder="Language">
              <button id="save-languages-btn">Save</button>
            </form>
            </div>
          </div>
          
          <div id="add-languages-popup" class="popup">
            <div class="popup-content">
                <a href="#" class="close-btn">&times;</a>
              <h2>Add Language</h2>
              <form action="" method="post">
              <input type="text" id="add-languages-language" placeholder="Language">
              <button id="add-languages-btn">Add</button>
            </form>
            </div>
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