<div class="userDiv">
    <div class="card mb-3">
        <div class="px-3 pt-4 pb-2">
            <form enctype="multipart/form-data" action="{{route('users.update', $user->id)}}" method="post">
                @csrf
                @method('put')
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                            src="{{$user->getImageURL()}}"
                            alt="{{ $user->name }} Avatar">
                        <div>
                            <input name="name" value="{{ $user->name }}" type="text" class="form-group">
                            @error('name')
                                <span class="text-danger fs-6">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="image" class="form-label">Profile picture</label>
                    <input name="image" type="file" class="form-control">
                    @error('image')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <h5 class="fs-5"> Bio: </h5>
                    <div class="mb-3">
                        <textarea name="bio" class="form-control" id="bio" rows="3" oninput="document.getElementById('charCount').innerText = `${this.value.length}/255`">{{$user->bio}}</textarea>
                        @error('bio')
                            <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                        @enderror
                        <span id="charCount">0/255</span>
                    </div>
                    <button class="btn btn-dark btn-sm mb-3">Save</button>
                    {{-- @include('users.shared.user-stats') --}}
                </div>
            </form>
        </div>
    </div>

    <div class="mobileFeed">
        <div class="navSearchBar">
            <input placeholder="Search..." class="input" name="text" type="text">
            <button class="button">
                <img src={{ asset('imgs/black/search.svg') }} alt="Search" class="theme-icon">
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
</div>

