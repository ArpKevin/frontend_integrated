<div class="post">
    <div class="postInfo">
        <div class="postPicture"></div>
        <div class="postData">
            <span class="birthName">{{ $idea->user->name }}</span>
            <span class="time">{{ $idea->created_at->diffForHumans() }}</span>
        </div>
    </div>

    <div class="postText">
        {{ $idea->content }}
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
            <span>{{ $idea->likes->count() }}</span>
        </div>
    </div>
    <button class="comments-toggle"><a href="{{ route('comment') }}">View Comments</a></button>
</div>

