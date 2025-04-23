@extends('shared.layout')

@section('title', 'Idea ' . $idea->id)

@section('content')

    <div class="main">
        <div class="main-container">
            @include('shared.right-sidebar')


            <div class="posts" style="overflow: auto; height: inherit">
                @include('shared.success-message')
                @include('shared.submit-idea')
                <div class="mobileFeed">
                    <div class="navSearchBar">
                        <input placeholder="Search..." class="input" name="text" type="text">
                        <button class="button">
                            <img src="{{ asset('imgs/black/search.svg') }}" alt="Search" class="theme-icon">
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
                <div class="idea-card">
                    @include('shared.idea-card')
                </div>
            </div>
        </div>
    </div>
@endsection
