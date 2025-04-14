<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="{{ asset('css/light/dashboard.css') }}" type="text/css" id="theme">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <script src="{{ asset('js/themeChange.js') }}"></script>
    <script src="{{ asset('js/searchOpen.js') }}"></script>
</head>
<body>

    <nav>
        <div class="nav-icons">
            <a href="{{ route('dashboard') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Home"><img src="{{ asset('images/black/home.svg') }}" alt="Home icon" class="theme-icon"></span></a>
            <a href="{{ route('profile') }}" class="link-size"><span class="material-symbols-outlined" data-tooltip="Profile"><img src="{{ asset('images/black/person.svg') }}" alt="Person icon" class="theme-icon"></span></a>
            <h1 id="navSpan">EchoMap</h1>
            <a class="link-size searchIcon"><span class="material-symbols-outlined" data-tooltip="Search" onclick="searchOpenBttn()"><img src="{{ asset('images/black/search.svg') }}" alt="Search icon" class="theme-icon"></span></a>
            <span class="material-symbols-outlined" data-tooltip="Dark Mode" onclick="toggleTheme()">
                <img src="{{ asset('images/black/theme.svg') }}" alt="Theme Toggle" class="theme-icon">
            </span>
            <span class="material-symbols-outlined" data-tooltip="Logout" class="link-size"><img src="{{ asset('images/black/logout.svg') }}" alt="Logout icon" class="theme-icon"></span>
        </div>
    </nav>

    <div id="SearchDiv">
        <div class="navSearchBar">
            <input placeholder="Search..." class="input" name="text" type="text">
            <button class="button">
                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                    <path d="M792-120.67 532.67-380q-30 25.33-69.64 39.67Q423.39-326 378.67-326q-108.44 0-183.56-75.17Q120-476.33 120-583.33t75.17-182.17q75.16-75.17 182.5-75.17 107.33 0 182.16 75.17 74.84 75.17 74.84 182.27 0 43.23-14 82.9-14 39.66-40.67 73l260 258.66-48 48Zm-414-272q79.17 0 134.58-55.83Q568-504.33 568-583.33q0-79-55.42-134.84Q457.17-774 378-774q-79.72 0-135.53 55.83-55.8 55.84-55.8 134.84t55.8 134.83q55.81 55.83 135.53 55.83Z"/>
                </svg>
            </button>
        </div> 
    </div>  

    <div class="main">
            <div class="main-container">
                <div class="userFeed">
                    <div class="searchBar">
                        <input placeholder="Search..." class="input" name="text" type="text">
                        <button class="button">
                            <img src="{{ asset('images/black/search.svg') }}" alt="Search" class="theme-icon">
                        </button>
                    </div>
                    <hr>

                    <span class="header">Your progress</span>

                    <div class="progressBar">
                        <div class="userProgress"><span>20%</span></div>
                    </div>

                    <div class="toDoList">
                        <ul>
                            <li>Set a profile picture</li>
                            <li>Set a banner</li>
                            <li>Like an idea</li>
                            <li>Comment on an idea</li>
                            <li>Post your first idea</li>
                        </ul>
                    </div>
                    <hr>
                    
                    <span class="header">Who to follow</span>

                    <div class="feedDiv" id="recommendations">

                        <div class="user">
                            <div class="feedPicture"></div>
                            <div class="feedName">
                                <p>@Username</p>
                            </div>
                            <button>Follow</button>
                        </div>
                        <div class="user">
                            <div class="feedPicture"></div>
                            <div class="feedName">
                                <p>@Username</p>
                            </div>
                            <button>Follow</button>
                        </div>
                    </div>

                    <span class="header recentHeader">Recent posts by followed users</span>
    
                    <div class="feedDiv" id="recentposts">

                        <div class="user">
                            <div class="feedPicture"></div>
                            <div class="feedName">
                                <p>@Username</p>
                            </div>
                            <button>View</button>
                        </div>
                    </div>

                </div>
                <div class="posts">
                    <div class="post">
                        <div class="postInfo">
                            <div class="postPicture"></div>
                            <div class="postData">
                                <span class="birthName">@WhySoSerious</span>
                                <span class="time">20 hours ago</span>
                            </div>
                            <span class="material-symbols-outlined more-icon">
                                <img src="{{ asset('images/black/more.svg') }}" alt="More icon" class="theme-icon">
                            </span>
                        </div>

                        <div class="postText">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nam illo minima, ut aut molestias quidem illum itaque? Aliquam repellendus inventore obcaecati nobis, odio deleniti itaque soluta distinctio dolores laboriosam?
                        </div>

                        <!-- Információ a posztról -->
                        <div class="postInformation">
                            <div class="likeInformation">
                                
                                <!-- From Uiverse.io by Tsiangana --> 
                                <label class="ui-bookmark">
                                    <input type="checkbox" />
                                    <div class="bookmark">
                                    <svg
                                        viewBox="0 0 16 16"
                                        style="margin-top:4px"
                                        class="bi bi-heart-fill"
                                        height="25"
                                        width="25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"
                                        fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                    </div>
                                </label>
                                <span>648</span>
                            </div>
                            <div class="commentInformation">
                                <img src="{{ asset('images/black/comment.svg') }}" alt="" class="theme-icon">
                                <span>999</span>
                            </div>
                        </div>
                        <button class="comments-toggle">View Comments</button>
                    </div>

                    <div class="post">
                        <div class="postInfo">
                            <div class="postPicture"></div>
                            <div class="postData">
                                <span class="birthName">@WhySoSerious</span>
                                <span class="time">20 hours ago</span>
                            </div>
                            <span class="material-symbols-outlined more-icon">
                                <img src="{{ asset('images/black/more.svg') }}" alt="More icon" class="theme-icon">
                            </span>
                        </div>
                        <div class="postText">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nam illo minima, ut aut molestias quidem illum itaque? Aliquam repellendus inventore obcaecati nobis, odio deleniti itaque soluta distinctio dolores laboriosam?
                        </div>
                        <div class="postInformation">
                            <div class="likeInformation">
                                
                                <!-- From Uiverse.io by Tsiangana --> 
                                <label class="ui-bookmark">
                                    <input type="checkbox" />
                                    <div class="bookmark">
                                    <svg
                                        viewBox="0 0 16 16"
                                        style="margin-top:4px"
                                        class="bi bi-heart-fill"
                                        height="25"
                                        width="25"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"
                                        fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                    </div>
                                </label>
                                <span>648</span>
                            </div>
                            <div class="commentInformation">
                                <img src="{{ asset('images/black/comment.svg') }}" alt="" class="theme-icon">
                                <span>999</span>
                            </div>
                        </div>

                        <button class="comments-toggle">View Comments</button>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>