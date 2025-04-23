<div class="underComments">
    @forelse ($idea->comments->sortByDesc('created_at') as $comment)
        <div class="post">
            <div class="postInfo">
                <div class="postPicture"></div>
                <div class="postData">
                    <span class="birthName">{{ $comment->user->name }}</span>
                <span class="time">{{ $idea->created_at->diffForHumans() }}</span>
            </div>
        </div>
        <div class="postText">
            {{ $comment->content }}
        </div>
    </div>  
    @empty
        <p class="text-center mt-4">
            This post doesn't have any comments
        </p>
    @endforelse
</div>