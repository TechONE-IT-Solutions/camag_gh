@extends('layouts/website')

@section('content')

<div class="container d-flex gap-3 justify-content-center mt-5">
    <div class="card col-lg-9 ">
        <div class="card-image">
            <img class="img-fluid" src="{{ asset($blog_post[0]['image']) }}" alt="Image">
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
            <div>
                Ghost (Nonexistent) Projects Listed By Dr.Bawumia And Government Delivery Tracker As Achievements.
            </div>
            <div class="container">
                <hr>
            </div>
            <div>
                Ghost (Nonexistent) Projects Listed By Dr.Bawumia And Government Delivery Tracker As Achievements.
            </div>
            <div class="container">
                <hr>
            </div>
            <div>
                Ghost (Nonexistent) Projects Listed By Dr.Bawumia And Government Delivery Tracker As Achievements.
            </div>
            <div class="container">
                <hr>
            </div>
            <div>
                Ghost (Nonexistent) Projects Listed By Dr.Bawumia And Government Delivery Tracker As Achievements.
            </div>
        </div>
    </div>
</div>
@endsection
