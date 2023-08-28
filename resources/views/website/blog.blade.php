@extends('layouts/website')

@section('content')

<div class="container d-flex gap-3 justify-content-center mt-5">
    <div class="card col-lg-9 ">
        <div class="card-image d-flex justify-content-center">
            <img class="img-fluid " src="{{ asset($blog_post[0]['image']) }}" class="blog-image" alt="Image">
        </div>
        <div class="card-body p-5">
            <h1 class="text-center">
                <u>{{$blog_post[0]['text']}}</u>
            </h1>
            <div>
                <div class="news_new">
                    {!! $blog_post[0]['textarea'] !!}
                </div>
            </div>
        </div>
    </div>

    <div class="card recent-post">
        <div class="card-body">
            <div class="c">
                <h3>RECENT POSTS</h3>
            </div>
            <div class="container">
                <hr>
            </div>
            @foreach( $recentPosts as $recentPost)
            <div>
                <a href="{{ route('website-blog', ['id' => $recentPost['id']]) }}">
                    {{ $recentPost['text']}}
                </a>
            </div>
            <div class="container">
                <hr>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
