<div class="userDiv">
    @include('shared.success-message')
    <div class="userProfile">
        <div class="backgroundImage">
            <div class="insideProfilePicture" style="background-image: url('{{ $user->getImageURL() }}')">
            </div>
        </div>
        <div class="profilePicture" style="background-image: url('{{ $user->getImageURL() }}')">
        </div>
        <div class="leftInformation">
            <div class="informationCenter">
                <img src="{{ asset('imgs/black/lightbulb.svg') }}" alt="" class="theme-icon"><span>10</span>
            </div>
            <div class="informationCenter">
                <img src="{{ asset('imgs/black/person.svg') }}" alt="" class="theme-icon"><span>10</span>
            </div>
        </div>
        <div class="rightInformation">
            <div class="informationCenter">
                <img src="{{ asset('imgs/black/favorite.svg') }}" alt="" class="theme-icon"><span>10</span>
            </div>
            <div class="informationCenter">
                <img src="{{ asset('imgs/black/comment.svg') }}" alt="" class="theme-icon"><span>10</span>
            </div>
        </div>
    </div>
    
    <span id="birthName">{{ $user->name }}</span>

    <p class="text-center mt-4">Bio: {{ $user->bio }}</p>

    <div class="profileButtons">
        <button id="profileEdit"><a href="{{ route('users.edit', $user->id) }}">Edit profile</a></button>
    </div>

    <hr id="largeScreenHr">

    <div class="middleInformation">
        <div class="userStatistics">
            <img src="{{ asset('imgs/black/lightbulb.svg') }}" alt="" class="theme-icon"><span>10</span>
            <img src="{{ asset('imgs/black/person.svg') }}" alt="" class="theme-icon"><span>10</span>
            <img src="{{ asset('imgs/black/favorite.svg') }}" alt="" class="theme-icon"><span>10</span>
            <img src="{{ asset('imgs/black/comment.svg') }}" alt="" class="theme-icon"><span>10</span>
        </div>
    </div>

    <hr id="smallScreenHr">

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
        @forelse($ideas as $idea)
            @include('shared.idea-card')
        @empty
            <p class="text-center mt-4">No results found.</p>
        @endforelse
        {{ $ideas->withQueryString()->links() }}
    </div>

    <hr id="smallScreenHr">

    </div>
</div>