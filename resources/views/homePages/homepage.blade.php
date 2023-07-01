@extends('homePages.layoutHome.master')
@section('content')
    <!-- /* ------------- navbar end --------------------- */ -->
    <div class="container">
        <!-- ----------left-sidebar------------- -->
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="images/cover-pic.png" width="100%">
                <div class="sidebar-profile-info">
                    <img src="images/user-1.png" >
                    <h1>omar al-shafee</h1>
                    <h3>Web Developer at Microsoft</h3>
                    <ul>
                        <li>Your Profile Views <span>52</span></li>
                        <li>Your Post Views <span>810</span></li>
                        <li>Your Connections <span>204</span></li>
                    </ul>
                </div>
                <div class="sidebar-profile-link">
                    <a href=""><img src="images/items.png" alt="">My Items</a>
                    <a href=""><img src="images/premium.png" alt="">Try Premium</a>
                </div>
            </div>

            <div class="sidebar-activity" id="sidebarActivity">
                <h3>RECENT</h3>
                <a href="#"><img src="images/recent.png" >Web Development</a>
                <a href="#"><img src="images/recent.png" >User Interface</a>
                <a href="#"><img src="images/recent.png" >Online Learning</a>
                <a href="#"><img src="images/recent.png" >Learn Online</a>
                <a href="#"><img src="images/recent.png" >Code Better</a>
                <a href="#"><img src="images/recent.png" >Group Learning</a>
                <h3>GROUPS</h3>
                <a href="#"><img src="images/group.png" >Web Design Group</a>
                <a href="#"><img src="images/group.png" >HTML & CSS Learners</a>
                <a href="#"><img src="images/group.png" >Python & JavaScript Group</a>
                <a href="#"><img src="images/group.png" >Learn Coding Online</a>
                <h3>HASHTAG</h3>
                <a href="#"><img src="images/hashtag.png" >Webdevelopment</a>
                <a href="#"><img src="images/hashtag.png" >userinterface</a>
                <a href="#"><img src="images/hashtag.png" >onlinelearning</a>
                <div class="discover-more-link">
                    <a href="">Discover more</a>
                </div>
            </div>
            <p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>
        </div>
        <!-- -----------main-content------------- -->
        <div class="main-content">

            <div class="create-post">
                <div class="create-post-input">
                    <img src="images/user-1.png" >
                    <textarea  rows="2" placeholder="Write a Post"></textarea>
                </div>
                <div class="create-post-links">
                    <li><img src="images/photo.png" alt="">Photo</li>
                    <li><img src="images/video.png" alt="">Video</li>
                    <li><img src="images/event.png" alt="">Event</li>
                    <li>Post</li>
                </div>
            </div>
            <div class="sort-by">
                <hr>
                <p>Sort by: <span>top <img src="images/down-arrow.png" alt=""></span></p>
            </div>
            <div class="post">
                <div class="post-auther">
                    <img src="images/user-1.png" alt="">
                    <div>
                        <h1>Omar Al-shafee</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and
                    digital marketing strategy. If you are on first page of all major search engines
                    then you are ahead among your competitors</p>
                    <img src="images/post-image-1.png" width="100%">

                    <div class="post-stats">
                        <div>
                            <img src="images/like.png" alt="">
                            <img src="images/love.png" alt="">
                            <img src="images/clap.png" alt="">
                            <span class="liked-users">omar and 75others</span>
                        </div>
                        <span>22 comments &middot; 40 shares</span>
                    </div>
                    <div class="post-activity">
                        <div>
                            
                            <img src="images/user-2.png" alt="">
                            <img src="images/user-3.png" alt="">
                        </div>
                        <div class="post-activity-link">
                            <img src="images/thumbsup.png" alt="">
                            <span>Like</span>
                        </div>
                        <div class="post-activity-link">
                            <a href="commint.html"><img src="images/comment.png" alt="">
                            <span>Comment</span></a>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/share.png" alt="">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/send.png" alt="">
                            <span>Send</span>
                        </div>
                    </div>
            </div>
            <div class="post">
                <div class="post-auther">
                    <img src="images/user-2.png" alt="">
                    <div>
                        <h1>Lorans Al—mansi</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and
                    digital marketing strategy. If you are on first page of all major search engines
                    then you are ahead among your competitors</p>
                    <img src="images/post-image-2.png" width="100%">

                    <div class="post-stats">
                        <div>
                            <img src="images/like.png" alt="">
                            <img src="images/love.png" alt="">
                            <img src="images/clap.png" alt="">
                            <span class="liked-users">omar and 705others</span>
                        </div>
                        <span>220 comments &middot; 90 shares</span>
                    </div>
                    <div class="post-activity">
                        <div>
                            <img src="images/user-1.png" alt="">
                            <img src="images/user-3.png" alt="">

                        </div>
                        <div class="post-activity-link">
                            <img src="images/thumbsup.png" alt="">
                            <span>Like</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/comment.png" alt="">
                            <span>Comment</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/share.png" alt="">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/send.png" alt="">
                            <span>Send</span>
                        </div>
                    </div>
            </div>
            <div class="post">
                <div class="post-auther">
                    <img src="images/user-3.png" alt="">
                    <div>
                        <h1>Dana Al Kukhun</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and
                    digital marketing strategy. If you are on first page of all major search engines
                    then you are ahead among your competitors</p>
                    <img src="images/post-image-3.png" width="100%">

                    <div class="post-stats">
                        <div>
                            <img src="images/like.png" alt="">
                            <img src="images/love.png" alt="">
                            <img src="images/clap.png" alt="">
                            <span class="liked-users">omar and 75others</span>
                        </div>
                        <span>22 comments &middot; 40 shares</span>
                    </div>
                    <div class="post-activity">
                        <div>
                            <img src="images/user-2.png" alt="">
                            <img src="images/user-4.png" alt="">

                        </div>
                        <div class="post-activity-link">
                            <img src="images/thumbsup.png" alt="">
                            <span>Like</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/comment.png" alt="">
                            <span>Comment</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/share.png" alt="">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/send.png" alt="">
                            <span>Send</span>
                        </div>
                    </div>
            </div>
            <div class="post">
                <div class="post-auther">
                    <img src="images/user-5.png" alt="">
                    <div>
                        <h1>Osaid Ghnaimat</h1>
                        <small>Founder and CEO at Gellelio Group | Angel Investor</small>
                        <small>2 hours ago</small>
                    </div>
                </div>
                <p>The success of every websites depends on search engine optimisation and
                    digital marketing strategy. If you are on first page of all major search engines
                    then you are ahead among your competitors</p>
                    <img src="images/post-image-4.png" width="100%">

                    <div class="post-stats">
                        <div>
                            <img src="images/like.png" alt="">
                            <img src="images/love.png" alt="">
                            <img src="images/clap.png" alt="">
                            <span class="liked-users">omar and 75others</span>
                        </div>
                        <span>22 comments &middot; 40 shares</span>
                    </div>
                    <div class="post-activity">
                        <div>
                            <img src="images/user-1.png" alt="">
                            <img src="images/user-3.png" alt="">

                        </div>
                        <div class="post-activity-link">
                            <img src="images/thumbsup.png" alt="">
                            <span>Like</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/comment.png" alt="">
                            <span>Comment</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/share.png" alt="">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="images/send.png" alt="">
                            <span>Send</span>
                        </div>
                    </div>
            </div>
            
        </div>
        <!-- ---------------right-sidebar---------- -->
        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="" alt="" class="info-icon">
                
                <h3>Trending News</h3>
                
                <a href="#">Higt demand for skilled manpower</a>
                
                <span>1h ago &middot;193 readers</span>
                
                <a href="#">Careers growing horizontally too</a>
                
                <span>5d ago &middot;15,824 readers</span>
                
                <a href="#">Less work visa for US, more for UK</a>
                
                <span>7d ago &middot;16,934 readers</span>
                
                <a href="#">More hiring = higher confidence?</a>
                
                <span>3d ago &middot;12,334 readers</span>
                
                <a href="#">Gautam Adani is the world's third richest</a>
                
                <span>6h ago &middot;934 readers</span>

                <a href="#" class="read-more-link">Read More</a>

            </div>
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
            
@endsection