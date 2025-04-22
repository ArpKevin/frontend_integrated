@extends('shared.layout')

@section('title', 'Feed')

@section('content')

<body>
    <div id="SearchDiv">
        <div class="navSearchBar">
            <input placeholder="Search..." class="input" name="text" type="text">
            <button class="button">
                <img src="imgs/black/search.svg" alt="Search" class="theme-icon">
            </button>
        </div> 
    </div>  

    <div class="main">
            <div class="main-container">
                @include('shared.left-sidebar')
                <div class="posts">
                    <div class="mobileFeed">
                        <div class="navSearchBar">
                            <input placeholder="Search..." class="input" name="text" type="text">
                            <button class="button">
                                <img src="imgs/black/search.svg" alt="Search" class="theme-icon">
                            </button>
                        </div>
                        <ul>
                            <li>Follow someone</li>
                            <li>Post your first idea</li>
                            <li>Like an idea</li>
                            <li>Comment on an idea</li>
                            <li style="text-decoration: line-through;">Set a banner</li>
                        </ul>
                        <span class="header">Top users</span>
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
                    </div>
                    <div class="post">
                        <div class="postInfo">
                            <div class="postPicture"></div>
                            <div class="postData">
                                <span class="birthName">@WhySoSerious</span>
                                <span class="time">20 hours ago</span>
                            </div>
                        </div>

                        <div class="postText">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nam illo minima, ut aut molestias quidem illum itaque? Aliquam repellendus inventore obcaecati nobis, odio deleniti itaque soluta distinctio dolores laboriosam?
                        </div>

                        <!-- Információ a posztról -->
                        <div class="postInformation">
                            <button><span>Edit post</span></button>
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
                        </div>
                        <button class="comments-toggle"><a href="{{ route('comment') }}">View Comments</a></button>
                    </div>
                    <div class="post">
                        <div class="postInfo">
                            <div class="postPicture"></div>
                            <div class="postData">
                                <span class="birthName">@WhySoSerious</span>
                                <span class="time">20 hours ago</span>
                            </div>
                        </div>

                        <div class="postText">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nam illo minima, ut aut molestias quidem illum itaque? Aliquam repellendus inventore obcaecati nobis, odio deleniti itaque soluta distinctio dolores laboriosam?
                        </div>

                        <!-- Információ a posztról -->
                        <div class="postInformation">
                            <button><span>Edit post</span></button>
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
                        </div>
                        <button class="comments-toggle"><a href="{{ route('comment') }}">View Comments</a></button>
                    </div>
                </div>
            </div>
    </div>
@endsection