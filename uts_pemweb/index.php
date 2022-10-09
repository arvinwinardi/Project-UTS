<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialBook - Easy Tutorials YouTube Channel</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav>
        <div class="nav-left">
            <img src="images/logo2.png" class="logo">
        <ul>
           
            <li><img src="images/notification.png"></li>
            <li><img src="images/inbox.png"></li>
            <li><img src="images/video.png"></li>
        </ul>
        </div>
        
        <div class="nav-right">
            <div class="search-box">
                <img src="images/search.png">
                <input type="text" placeholder="Search">
            </div>
            <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                <img src="images/profile-pic.png">
            </div>
            
        </div>
        <!-- ------dropdown-settings-menu--------- -->
        <div class="settings-menu">
            <div id="dark-btn">
                <span></span>
            </div>
            <div class="settings-menu-inner">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <a href="">See your profile</a>
                    </div>
                </div>
                <hr>
                <div class="user-profile">
                    <img src="images/feedback.png">
                    <div>
                        <p>Give Feedback</p>
                        <a href="">Help us improve the new deisgn</a>
                    </div>
                </div>
                <hr>
                <div class="settings-links">
                    <img src="images/setting.png" class="settings-icon">
                    <a href="">Settings & Privacy <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/help.png" class="settings-icon">
                    <a href="">Help & Support <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/display.png" class="settings-icon">
                    <a href="">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
                </div>
                <div class="settings-links">
                    <img src="images/logout.png" class="settings-icon">
                    <a href="">Logout <img src="images/arrow.png" width="10px"></a>
                </div>
            </div>
            
        </div>
    </nav>
    <div class="container">
       <div class="left-sidebar">
           <div class="imp-links">
               <a href="#"><img src="images/news.png"> Latest News</a>
               <a href="#"><img src="images/friends.png"> Friends</a>
               <a href="#"><img src="images/group.png"> Groups</a>
               <a href="#"><img src="images/marketplace.png"> Marketplace</a>
               <a href="#"><img src="images/watch.png"> Watch</a>
               <a href="#">See More</a>
           </div>
           <div class="shortcut-links">
            <p>Your Shortcuts</p>
            <a href="#"><img src="images/shortcut-1.png"> Web Developers</a>
            <a href="#"><img src="images/shortcut-2.png"> Web Design Course</a>
            <a href="#"><img src="images/shortcut-3.png"> Full Stack Development</a>
            <a href="#"><img src="images/shortcut-4.png"> Website Experts</a>
            
        </div>
       </div>
<!----------------- middle content--------- -->
       <div class="main-content">
        <div class="story-gallery">
            <div class="story story1">
                <img src="images/upload.png">
                <p>Post Story</p>
            </div>
            <div class="story story2">
                <img src="images/member-1.png">
                <p>Alison</p>
            </div>
            <div class="story story3">
                <img src="images/member-2.png">
                <p>Jackson</p>
            </div>
            <div class="story story4">
                <img src="images/member-3.png">
                <p>Samona</p>
            </div>
            <div class="story story5">
                <img src="images/member-4.png">
                <p>John Doe</p>
            </div>
        </div>

        <div class="write-post-container">
            <div class="user-profile">
                <img src="images/profile-pic.png">
                <div>
                    <p>John Nicholson</p>
                    <small>Public <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

            <div class="post-input-container">
                <textarea rows="3" placeholder="What's on your mind, Jack?"></textarea>
                <div class="add-post-links">
                    <a href="#"><img src="images/live-video.png"> Live Video</a>
                    <a href="#"><img src="images/photo.png"> Photo/Video</a>
                    <a href="#"><img src="images/feeling.png"> Feeling/Activity</a>
                </div>
            </div>

        </div>
        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <span>June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <p class="post-text">Subscribe <span>@Easy Tutorials</span> YouTube channel to watch more videos on website developement and UI designs. <a href="">#EasyTutorials</a> <a href="">#YouTubeChannel</a></p>
            <img src="images/feed-image-1.png" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="images/like-blue.png"> 120</div>
                    <div><img src="images/comments.png"> 45</div>
                    <div><img src="images/share.png"> 20</div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

        </div>

        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <span>June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <p class="post-text">Like and share this video with friends, tag <span>@Easy Tutorials</span> facebook page on your post. Ask you doubts in the comments <a href="">#EasyTutorials</a> <a href="">#Subscribe</a></p>
            <img src="images/feed-image-2.png" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="images/like.png"> 120</div>
                    <div><img src="images/comments.png"> 45</div>
                    <div><img src="images/share.png"> 20</div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

        </div>

        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <span>June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <p class="post-text">Like and share this video with friends, tag <span>@Easy Tutorials</span> facebook page on your post. Ask you doubts in the comments <a href="">#EasyTutorials</a> <a href="">#Subscribe</a></p>
            <img src="images/feed-image-3.png" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="images/like.png"> 120</div>
                    <div><img src="images/comments.png"> 45</div>
                    <div><img src="images/share.png"> 20</div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

        </div>

        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <span>June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <p class="post-text">Like and share this video with friends, tag <span>@Easy Tutorials</span> facebook page on your post. Ask you doubts in the comments <a href="">#EasyTutorials</a> <a href="">#Subscribe</a></p>
            <img src="images/feed-image-4.png" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="images/like.png"> 120</div>
                    <div><img src="images/comments.png"> 45</div>
                    <div><img src="images/share.png"> 20</div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

        </div>

        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="images/profile-pic.png">
                    <div>
                        <p>John Nicholson</p>
                        <span>June 24 2021, 13:40 pm</span>
                    </div>
                </div>
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
            </div>
            <p class="post-text">Like and share this video with friends, tag <span>@Easy Tutorials</span> facebook page on your post. Ask you doubts in the comments <a href="">#EasyTutorials</a> <a href="">#Subscribe</a></p>
            <img src="images/feed-image-5.png" class="post-img">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="images/like.png"> 120</div>
                    <div><img src="images/comments.png"> 45</div>
                    <div><img src="images/share.png"> 20</div>
                </div>
                <div class="post-profile-icon">
                    <img src="images/profile-pic.png"> <i class="fas fa-caret-down"></i></small>
                </div>
            </div>

        </div>
        
        <button type="button" class="load-more-btn">Load More</button>

       </div>
<!-- ----------right sidebar----------- -->
       <div class="right-sidebar">
           <div class="sidebar-title">
               <h4>Events</h4>
               <a href="#">See All</a>
           </div>

           <div class="event">
               <div class="event-left">
                    <h3>18</h3>
                    <span>March</span>
               </div>
               <div class="event-right">
                   <h4>Social Media</h4>
                   <p><i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
                   <a href="#">More Info</a>
               </div>
           </div>
           <div class="event">
            <div class="event-left">
                 <h3>22</h3>
                 <span>March</span>
            </div>
            <div class="event-right">
                <h4>Mobile Marketing</h4>
                <p><i class="fas fa-map-marker-alt"></i> Willson Tech Park</p>
                <a href="#">More Info</a>
            </div>
        </div>

        <div class="sidebar-title">
            <h4>Advertisement</h4>
            <a href="#">Close</a>
        </div>

        <img src="images/advertisement.png" class="sidebar-ad">

        <div class="sidebar-title">
            <h4>Conversation</h4>
            <a href="#">Hide Chat</a>
        </div>

        <div class="online-list">
            <div class="online"><img src="images/member-1.png"></div>
            <p>Alison Mina</p>
        </div>
        <div class="online-list">
            <div class="online"><img src="images/member-2.png"></div>
            <p>Jackson Aston</p>
        </div>
        <div class="online-list">
            <div class="online"><img src="images/member-3.png"></div>
            <p>Samona Rose</p>
        </div>
        

       </div>
    </div>
    <div class="footer">
        <p>Copyright 2021 - Easy Tutorials YouTube Channel</p>
    </div>

    <script src="script.js"></script>
</body>
</html>