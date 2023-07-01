@extends('homePages.layoutHome.master3')
@section('content')


    <div id="search-filters">
        <div class="search-box">
            <form id="search-form" onsubmit="showResults(); return false;">
                
              <input type="text" id="search-input" placeholder="Search">
              <button type="submit" id="search-button"><img src="images/search.png" alt=""></button>
            </form>
          </div>
        <div class="filter">
          
          <select id="filter-time">
            <option value="any-time">Any Time</option>
            <option value="past-24-hours">Past 24 Hours</option>
            <option value="past-week">Past Week</option>
            <option value="past-month">Past Month</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <div class="filter">
          <select name="time" id="filter-company">
            <option value="" disabled selected hidden>Company</option>
            <option value="company">Orange</option>
          </select>
        </div>
        <div class="filter">
            <select name="" id="filter-salary" class="">
                <option value="" disabled selected hidden>Salary</option>
                <option value="$40,000+">$40,000+</option>
                <option value="$40,000+">$60,000+</option>
                <option value="$40,000+">$80,000+</option>
                <option value="$40,000+">$100,000+</option>
                <option value="$40,000+">$120,000+</option>
            </select>
        </div>
        <div class="filter">
            <select id="filter-location">
                <option value=""disabled selected hidden>Location</option>
                <option value="Amman,JO">Amman,JO</option>
            </select>
        </div>
        <div class="filter">
            <select name="" id="filter-jop-type" ="changejoptype();return false;">
                <option value="" id="jop-type" disabled selected hidden>Jop-type</option>
                <option value="">Full-time</option>
                <option value="">Part-time</option>
                <option value="">Contract</option>
                <option value="">Temporary</option>
                <option value="">Internship</option>
            </select>
        </div>
        <div class="filter">
            <select name="" id="experience-level" >
                <option value="" disabled selected hidden>Experience-level</option>
                <option value="">Internship</option>
                <option value="">Entry level</option>
                <option value="">Associate</option>
                <option value="">Mid-Senior level</option>
                <option value="">Diretor</option>
            </select>

            
        </div>
        <div class="filter">
            <select name="" id="on-site/remote" >
                <option value=""disabled selected hidden>On-Site/Remote</option>
                <option value="">Remote</option>
                <option value="">Hibrid</option>
                <option value="">On-Site</option>
            </select>
        </div>
    </div>
        <div id="cont" class="container">
            <div  class="search-container">
                <img id="search-image" src="images/cute-girl-stylish-glasses-smiles-puts-wireless-earphone-holds-open-laptop-background-office-board.jpg" width="578px" alt="Search Image">
                <h3 id="search-pragraph">Try searching for your jop.</h3>
                <div id="search-results" hidden>
                    <div class="job-card">
                        <div class="company-logo">
                          <img src="images/business-woman-with-laptop-hand-is-happy-with-success-portrait-woman-glasses-striped-blouse-enthusiastically-screaming-making-winning-gesture.jpg" alt="Company Logo">
                        </div>
                        <div class="job-details">
                          <h2 class="job-title">Software Engineer</h2>
                          <p class="company-name">ABC Company</p>
                          <p class="job-location">San Francisco, CA</p>
                          <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla quam vitae erat tempus, eget scelerisque magna lacinia.</p>
                          <div class="apply-button">
                            <a href="#" class="btn">Apply Now</a>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Add more job cards as needed -->
                      
                    </div>
                  </div>
        </div>
@endsection
      



































































































































































































































































































