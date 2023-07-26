@extends('layouts/website')


@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Executive Members</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('website-home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Executive Members</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
               
                <h3 class=" mb-5">Our Executive Members on Regional Level</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-1.jpg') }}" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-primary">Founder & CEO</span>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-2.jpg') }}" alt="">
                        <h5>Adam Crew</h5>
                        <span class="text-primary">Co Founder</span>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-3.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-4.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-1.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-2.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-3.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('CAMAG/img/team-4.jpg') }}" alt="">
                        <h5>Robert Jordan</h5>
                        <span class="text-primary">Digital Marketer</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

     


@endsection