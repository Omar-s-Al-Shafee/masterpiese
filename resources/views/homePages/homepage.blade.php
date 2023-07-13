@extends('homePages.layoutHome.master')
@section('homepage', 'homePage')
@section('content')
    <!-- /* ------------- navbar end --------------------- */ -->
    <div class="containerhomePage">
        <!-- ----------left-sidebar------------- -->
        <div class="left-sidebar">
            <div class="sidebar-profile-box">
                <img src="{{ asset($user->img_cover) }}" width="100%">
                <div class="sidebar-profile-info">
                    <img src="{{ asset($user->img_profile) }}">
                    <h1>{{ $user->name }}</h1>
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
                    <img src="src="{{ $user->img_profile }}"" alt="Profile Image">
                    <textarea rows="2" placeholder="Write a Post"></textarea>
                </div>
                <div class="create-post-links">
                    <li><img src="images/photo.png" alt="">Photo</li>
                    <li><img src="images/video.png" alt="">Video</li>
                    <li><img src="images/event.png" alt="">Event</li>
                    <li><a href="#">Post</a></li>
                </div>
            </div>
            <div class="sort-by">
                <hr>
                <p>Sort by: <span>top <img src="images/down-arrow.png" alt=""></span></p>
            </div>
            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-author">
                        <img src="{{ asset($user->img_profile) }}" width="50px" alt="">
                        <div>
                            <h1>{{ $post->user->name }}</h1>
                            <small>{{ $post->user->position }}</small>
                            <small>{{ $post->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    <p>{{ $post->content }}</p>
                    @if ($post->image)
                        <img src="{{ asset($post->image) }}" width="100%">
                    @endif

                    <div class="post-stats">
                        <div>
                            <img src="{{ asset('images/like.png') }}" alt="">
                            <img src="{{ asset('images/love.png') }}" alt="">
                            <img src="{{ asset('images/clap.png') }}" alt="">
                            <span class="liked-users">{{ $post->likes_count }} likes</span>
                        </div>
                        <span>{{ $post->comments_count }} comments &middot; 40 shares</span>
                    </div>

                    <div class="post-activity">
                        <div>
                            <!-- Display users who liked the post -->
                            @if ($post->likes)
                                @foreach ($post->likes as $like)
                                    <img src="{{ asset($like->user->img_profile) }}" alt="">
                                @endforeach
                            @endif
                        </div>
                        <div class="post-activity-link">
                            <img src="{{ asset('images/thumbsup.png') }}" alt="">
                            <span>Like</span>
                        </div>
                        <div class="post-activity-link">
                            <a href="{{ $post->id ? route('comment', ['post_id' => $post->id]) : '#' }}">
                                <img src="{{ asset('images/comment.png') }}" alt="">
                                <span>Comment</span>
                            </a>
                        </div>
                        <div class="post-activity-link">
                            <img src="{{ asset('images/share.png') }}" alt="">
                            <span>Share</span>
                        </div>
                        <div class="post-activity-link">
                            <img src="{{ asset('images/send.png') }}" alt="">
                            <span>Send</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- ---------------right-sidebar---------- -->
        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="" alt="" class="info-icon">
                
                <h3>Trending News</h3>
                
                <a href="#">High demand for skilled manpower</a>
                
                <span>1h ago &middot; 193 readers</span>
                
                <a href="#">Careers growing horizontally too</a>
                
                <span>5d ago &middot; 15,824 readers</span>
                
                <a href="#">Less work visa for US, more for UK</a>
                
                <span>7d ago &middot; 16,934 readers</span>
                
                <a href="#">More hiring = higher confidence?</a>
                
                <span>3d ago &middot; 12,334 readers</span>
                
                <a href="#">Gautam Adani is the world's third richest</a>
                
                <span>6h ago &middot; 934 readers</span>

                

                <a href="#" class="read-more-link">Read More</a>

            </div>
            <div class="sidebar-ad">
                <small>Ad &middot; &middot; &middot;</small>
                <p>Master the 5 priciples of web design</p>
                <div>
                    <img src="{{ asset($user->img_profile) }}" >
                    <img src="images/mi-logo.png" >
                </div>
                <p>Brand and Demand in Xiaomi</p>
                <a href="#" class="ad-link">Learn More</a>
            </div>
            
@endsection