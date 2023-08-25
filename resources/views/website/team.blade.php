@extends('layouts/website')


@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header-members py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
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
                @foreach($executives as $executive)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset($executive['image']) }}" alt="">
                        <h5>{{ $executive['text']}}</h5>
                        <span class="text-primary">{{ $executive['textarea']}}</span>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->




@endsection
