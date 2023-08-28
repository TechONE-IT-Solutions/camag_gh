@extends('layouts/website')


@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header-gallery py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('website-home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Gallery Start -->
<div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">

                <h3 class=" mb-5">Photos Of Our Current Programs</h3>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($Gallery as $picture)
                    <div class="project-item mb-5">
                        <div class="position-relative bg-light">
                            <img class="img-fluid" src="{{asset($picture['image']) }}" alt="">
                        </div>
                        <div class="p-4">
                            <span>{{ $picture['text']}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="video-wrapper d-block">
        <div class="caption">
            <p>CAMAG had chance to meet JM  on his proposal to pay monthly allowance for assembly members </p>
        </div>
        <div class="video d-flex justify-content-center align-items-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid0RTQoYtNqtR4duBP3xrWoQK521ZKPE5z3GBzctsBpMfyLMXBRxh6bPGb2KQ8WtP78l%26id%3D106345241196398&show_text=true&width=500" width="1000" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
    <!-- Gallery End -->


@endsection
