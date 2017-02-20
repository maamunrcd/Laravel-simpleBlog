@extends('layout2.master')
@section('content')
    <div class="col-sm-8 blog-main">

        <div class="blog-post">
            @include('posts2.post')

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
</div>
    </div><!-- /.blog-main -->
@endsection