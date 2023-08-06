@extends('layouts/website')

@section('content')

<div class="container">
    <div class="row p-5">
       <div class="col">
            <div>
                <img class="img-responsive" src="{{ asset($blog_post[0]['image']) }}" alt="Image">
            </div>
       </div>
       <div class="col">
            <h1 class="text-center"><u>{{$blog_post[0]['text']}}</u></h1>
            <div>
                <p class="news_new">{!! $blog_post[0]['textarea'] !!}</p>
            </div>
        </div>
    </div>
</div>






@endsection
