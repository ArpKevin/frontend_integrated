<div class="mobileFeed">
    <div class="navSearchBar">
        <form action="{{ route('dashboard') }}" method="get" style="display: inherit;">
            <input value="{{ request('search', '') }}" placeholder="Search..." class="input" name="search" type="text">
            <button class="button" type="submit">
                <img src="{{ asset('imgs/black/search.svg') }}" alt="Search" class="theme-icon">
            </button>
        </form>
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
        @forelse($topUsers as $topUser)
            <div class="user">
                <div class="feedPicture" style="background-image: url('{{ $topUser->getImageURL() }}')"></div>
                <div class="feedName">
                    <p style="margin-bottom: 0"><a href="{{ route('profile', $topUser->id) }}">{{ $topUser->name }}</a></p>
                </div>
            </div>
        @empty
            <p class="text-center" style="margin: 0">No results found.</p>
        @endforelse
    </div>
</div>