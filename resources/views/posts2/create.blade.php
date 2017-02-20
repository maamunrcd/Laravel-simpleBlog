@extends('layout2.master')
@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Published A post</h1>
        <br>
        <form method="POST" action="/posts2">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" class="form-control" id="body" cols="10" rows="6"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Published</button>
            </div>
            @include('partial2.validation')
        </form>

    </div><!-- /.blog-main -->
    @endsection