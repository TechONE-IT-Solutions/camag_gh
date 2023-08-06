@extends('layouts/website')


@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Events & Programs.</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('website-home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Events & Programs.</li>
                </ol>
            </nav>
         </div>
    </div>
    <!-- Page Header End -->

    <!-- Events section Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <p class="fs-4 fw-medium text-primary">Our Events</p>
                    <h1 class="display-7 mb-5">Explore our exciting lineup of upcoming events.</h1>
                </div>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($events as $event)
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset($event['image']) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset($event['image']) }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">{{$event['text']}}</a>
                        <span>{{$event['textarea']}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--Events section end-->

@endsection
