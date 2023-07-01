@extends('landingPage.layoutLand.master2')
@section('content')
    <div class="container">
        <div class="section-one">
            <div class="section-one-left">
                <h1>This Is Where Professionals Come Together To Connect And Grow.</h1>
                <a href="sign in.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Sign In
                  </a>
                <h3>OR</h3>
                <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    New to Isla?Join Now
                  </a>
            </div>
            <div class="section-one-right">
                <img src="images/person-office-analyzing-checking-finance-graphs.jpg" alt="">
            </div>
        </div>
        <div class="section-tow">
            <div class="section-tow-left">
                <h2>Let us Help You Find Your Dream Job Or Internship</h2>
                
            </div>
            <div class="section-tow-right" id="app">
                <p>Top search suggestions</p>
                <ul v-bind:class="{'is-collapsed': collapsed}">
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Engineering
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Finance
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Retail Associate
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Customer Service
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Marketing
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Operations
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Human Resources
                  </a>
                  <a href="sign up.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Sales
                  </a>
                  
                </ul>
                <a v-on:click="collapsed = !collapsed">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    {{ collapsed ? 'Show more' : 'Show less' }}
                </a>
              </div>
              
        </div>
        <!-- /* end section tow */ -->


        <!-- /* start section three */ -->
        <div class="section-three">
            <div class="section-three-left">
                <p>Share your job opportunity
with a vast network of potential
candidates.
                </p>
            </div>
            <div class="section-three-right">
                <a href="page-notfound.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Post a jop
                  </a>
            </div>
        </div>

        <!-- end section three -->
        
        <!-- start section four -->


        <div class="section-four">
            <div class="section-four-left">
                <H2>Who is Isla for?</H2>
                <p>Individuals who want to steer their professional life in the right direction.</p>
                <a href="people-landing.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Find a coworker or classmate
                </a>
                <a href="jops-landing.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Find a new jop
                </a>

            </div>
            <div class="section-four-right">
                <img src="images/successful-business-team-expressing-unity.jpg" alt="">
            </div>
        </div>  
    </div>
    @endsection