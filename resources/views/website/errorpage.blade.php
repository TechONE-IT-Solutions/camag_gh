@extends('layouts.website')

@section('content')

<main>
  <div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1 class="display-1 text-warning">404</h1>
      <h2>OOPS! NOTHING WAS FOUND</h2>
      <p class="col-5 text-center">The page you are looking for might have been removed, had its name changed or is temporarily unavailable</p>
      <a class="btn btn-outline-warning" href="{{ route('website-home') }}">Back to home</a>
      <!-- <img src="{{asset('CAMAG/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found"> -->
    </section>

  </div>
</main><!-- End #main -->


@endsection


  
