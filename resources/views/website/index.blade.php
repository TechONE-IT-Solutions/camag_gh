@extends('layouts/website')


@section('content')
<!-- Carousel Start -->

<div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($banners as $banner)
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset($banner['image']) }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>CAMAG</strong>
                                    </p>
                                    <h3 class="display-1 text-white  animated slideInRight">Concerned Assembly</h3>
                                    <h4 class="display-1 text-white  animated slideInRight"> {{$banner['text']}}</h4>
                                    <a href="{{ route('website-registration') }}"
                                        class="btn btn-primary  py-3 px-5 animated slideInRight">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="carousel-item">
                    <img class="w-100" src="{{asset('CAMAG/img/back22.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to
                                        <strong>CAMAG</strong>
                                    </p>
                                    <h3 class="display-1 text-white  animated slideInLeft">Concerned Assembly</h3>
                                    <h4 class="display-1 text-white  animated slideInLeft"> Members Association of Ghana</h4>
                                    <a href="{{ route('website-registration') }}"
                                        class="btn btn-primary  py-3 px-5 animated slideInLeft">Register Now</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="carousel-item">
                <img class="w-100" src="{{asset('CAMAG/img/back22.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 text-start">
                                <p class="fs-4 text-white animated slideInLeft">Welcome to
                                    <strong>CAMAG</strong>
                                </p>
                                <h3 class="display-1 text-white  animated slideInLeft">Concerned Assembly</h3>
                                <h4 class="display-1 text-white  animated slideInLeft"> Members Association of Ghana</h4>
                                <a href="{{ route('website-registration') }}"
                                    class="btn btn-primary  py-3 px-5 animated slideInLeft">Register Now</a>
                            </div>
                        </div>
                </div>
            </div>

        </div> --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Stats Counter Section Start-->
    <div class="container py-7 mt-5">
        <div class="row rounded bg-light text-center py-4 g-4 counter-RANDOMID text-primary">
            @foreach($number as $count)
            <div class="col">
                <span class="fw-bold  display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="{{$count['number']}}" data-time="1000" data-delay="60" data-format="{}"></span>
                <p class="lead" editable="inline"><span><b>{{$count['text']}}</b></span></p>
            </div>
            @endforeach
            <!-- <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="118" data-time="1000" data-delay="60" data-format="{}"></span>
                <p class="lead" editable="inline"><b>Municipal</b> Assemblies</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="126" data-time="1000" data-delay="60" data-format="{}"></span>
                <p class="lead" editable="inline"><b>District</b> Assemblies</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <span class="fw-bold display-5 mb-5" data-vanilla-counter="" data-start-at="0" data-end-at="6" data-time="1000" data-delay="0" data-format="{}"></span>
                <p class="lead" editable="inline"><b>Years</b> Of Establishment</p>
            </div> -->
        </div>
    </div>

    <!-- End Stats Counter Section -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                <p class="fs-4 fw-bold ">CAMAG Seek to Achieve Its Objectives Through</p>

            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-4">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-3"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-5.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Advocacy and Lobbying</h4>
                                <p class="mb-2">CAMAG aims to influence legislation and educate stakeholders on local government concepts through lobbying and advocacy, aiming to improve governance concepts at both local and national levels.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-2"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-6.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Research and Development</h4>
                                <p class="mb-3 p-2">CAMAG aims to expand knowledge on local governance concepts and develop others through research and development plans, empowering people to learn and understand the world.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-2"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-7.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Training and Capacity Building Activities.</h4>
                                <p class="mb-0">CAMAG empowers individuals and institutions through policy analysis, awareness building, and capacity training, driving positive change in local governments and fostering partnerships.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-2"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-8.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Public Education</h4>
                                <p class="mb-3 pb-2">CAMAG aims to offer free education on local governance, regardless of race, ethnicity, or socioeconomic status, focusing on core content knowledge, citizenship, and skills for successful implementation.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100 pb-2">
                        <div class="service-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-2"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-9.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Networking and Collaboration work.</h4>
                                <p class="mb-4">CAMAG promotes connections between individuals, communities, and countries to improve local governance concepts, collaborating with institutions and agencies for common goals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative">
                        <div class="service-text rounded p-3">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-2"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('CAMAG/img/icon/icon-10.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-2">Organization of platforms for good governance</h4>
                                <p class="mb-2">Concerned Assembly Members Association of Ghana (CAMAG) as part of its aims will consistently organize programs that seek to remodel and improve local governance concepts to achieve good governance.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">

                <h2 class=" mb-5 ">Current News and Posts</h2>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($news as $new)
                <div class="project-item mb-5 Halius">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset($new['image']) }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('CAMAG/img/project-1.jpg') }}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="{{ route('website-blog', ['id' => $new['id']]) }}">{{$new['text']}}</a>

                        <span style="background-color: white !important;">{!! $new['textarea'] !!}</span>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Project End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                <h1 class=" mb-5">Our Executive Members</h1>
            </div>
            <div class="row g-4">
                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset($team['image']) }}" alt="">
                        <h5>{{$team['text']}}</h5>
                        <span class="text-primary">{{$team['textarea']}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                    <h1 class=" mb-4">For Any Eny Enquiries</h1>

                    <p>"Got a question or looking for more information? We'd love to hear from you! Our team is here to assist with anything you need. Whether it's a partnership opportunity, or just a friendly hello, don't hesitate to reach out. Drop us a line using the contact form below, and we'll get back to you promptly.</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="tel:+233 24 897 9400;">

                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>

                        <span class="fs-5 fw-medium mx-4">+233 24 897 9400</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Contact Us </h2>
                    <div class="row g-3">

                        <form action="{{ route('website-contactUs')}}" method="POST">
                            @csrf
                            <div class="col-12 my-md-1">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="mail_name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12 my-md-1">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="mail_email" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12 my-md-1">
                                <div class="form-floating">
                                    <input type="text" name="mail_head" class="form-control" id="mobile" placeholder="Subject">
                                    <label for="mobile">Subject</label>
                                </div>
                            </div>

                            <div class="col-12 my-md-1">
                                <div class="form-floating">
                                    <textarea class="form-control" name="mail_body" placeholder="Leave a message here" id="message"
                                        style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->

@endsection
