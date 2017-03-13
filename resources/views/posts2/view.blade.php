@extends('layout2.master')
@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <div class="post_item">
            <h2 class="blog-post-title"><a href="/posts2/{{$iddata->id}}">{{$iddata->title}}</a></h2>
            <ul>
                 <li>
                @if(count($iddata->tags))
                @foreach ($iddata->tags as $tag)
               
                    <a href="/posts2/tags/{{$tag->name}}">{{$tag->name}},</a>
                
                @endforeach
                @endif
                </li>
            </ul>
            <p class="blog-post-meta">{{$iddata->user->name}} On {{$iddata->created_at->toFormattedDateString()}}</p>
            <p>{{$iddata->body}}</p>
            <div class="comments">
                <ul class="list-group">
                    @foreach($iddata->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                        </strong>
                        {{$comment->body}}
                    </li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <h3>Leave a comment</h3>
            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/posts2/{{$iddata->id}}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="body" class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="comment">Add comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection