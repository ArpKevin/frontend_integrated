<div class="post">
    <div class="postInfo">
        <div class="postPicture" style="background-image: url('{{ $idea->user->getImageURL() }}')"></div>
        <div class="postData">
            <span class="birthName"><a href="{{ route('users.show', $idea->user->id) }}">{{ $idea->user->name }}</a></span>
            <span class="time">{{ $idea->created_at->diffForHumans() }}</span>
        </div>
    </div>

    <div class="postText">
        {{ $idea->content }}
    </div>

    <button class="comments-toggle"><a href="{{ route('ideas.show', $idea->id) }}">View</a></button>

    <!-- Információ a posztról -->
    <div class="postInformation">
        @if(auth()->check() && (auth()->id() === $idea->user_id || auth()->user()->is_admin))
            <form action="{{ route('ideas.edit', $idea->id) }}" method="GET">
                <button><span>Edit post</span></button>
            </form>
        @endif
        @if(auth()->check() && (auth()->id() === $idea->user_id || auth()->user()->is_admin))
            <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button style="background-color: red; color: white;" onclick="return confirm('Are you sure you want to delete this post?')"><span>Delete post</span></button>
            </form>
        @endif
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
            <span>{{ $idea->likes->count() }}</span>
        </div>
    </div>
    
</div>

