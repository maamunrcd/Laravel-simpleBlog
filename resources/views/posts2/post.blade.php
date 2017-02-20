<div class="blog-post">
    @foreach($posts as $post)
    <div class="post_item">
            <h2 class="blog-post-title"><a href="/posts2/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">{{$post->user->name}} On {{$post->created_at->toFormattedDateString()}}</p>
            <p>{{$post->body}}</p>
    </div>
    @endforeach
</div>