<Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>CAMAG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{asset('CAMAGADMIN/assets/img/favicon.png') }}" rel="icon">

    <!-- Datatable CSS-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('CAMAG/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('CAMAG/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('CAMAG/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('CAMAG/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('CAMAG/css/style.css') }}" rel="stylesheet">
</head>
<body>
     <!-- Spinner Start -->
     <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <div class=" log">
                    <a href="{{ route('website-home') }}" class="nav-item nav-link fs-4 fw-bolder mt-3  ">
                        <img src="{{asset('CAMAG/img/logo.png') }}" alt="Image"  style="width: 210px; height: 70px;">
                    </a>
                </div>

                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse logo" id="navbarCollapse">

                    <div class="navbar-nav ms-auto me-0">
                       
                        
                        <a href="{{ route('website-home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('website-about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('website-team') }}" class="nav-item nav-link">Executive Members</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donate/Pay Dues</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('website-registration') }}" class="dropdown-item">Register</a>
                                <a href="{{ route('website-donate') }}" class="dropdown-item">Donate</a>
                                <a href="{{ route('website-pay-dues') }}" class="dropdown-item ">Pay Dues</a>

                            </div>
                        </div>
                        <a href="{{ route('website-events') }}" class="nav-item nav-link">Events & Program</a>
                        <a href="{{ route('website-gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a href="{{ route('website-contact') }}" class="nav-item nav-link">Contact </a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('website-registration') }}" class="btn btn-primary  py-2 px-3 fw-bold">Register Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
