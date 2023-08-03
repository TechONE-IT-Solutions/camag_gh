<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Labone, Accra, Ghana</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233 24 897 9400</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@camaghana.org</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <div class="nav-item dropdown">
                    <a class="btn btn-link" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Donate/Pay Dues</a>
                    <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                        <a href="{{ route('website-donate') }}" class="dropdown-item">Donate</a>
                        <a href="{{ route('website-pay-dues') }}" class="dropdown-item">Pay Dues</a>
                    </div>
                </div>
                <a class="btn btn-link" href="{{ route('login') }}">Login</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Business Hours</h4>
                <p class="mb-1">Monday - Friday</p>
                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                <p class="mb-1">Saturday</p>
                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                <p class="mb-1">Sunday</p>
                <h6 class="text-light">Closed</h6>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Newsletter</h4>
                <p>Stay in the loop with our exciting updates, exclusive offers, and the latest trends by subscribing to our newsletter.</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email" disabled>
                    <button type="button"
                        class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2" disabled>SignUp</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

   <!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
    <div class="row">
    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        &copy; <a class="fw-medium text-light" href="{{ route('website-home')}}">CAMAG</a>, All Right Reserved.
    </div>
    <div class="col-md-6 text-center text-md-end">
        Designed By <a class="fw-medium text-light" href="https://techoneitsolutions.com/">Techone IT Solutions</a>
      </div>
    </div>
    </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('CAMAG/lib/wow/wow.min.js') }}"></script>
    <script src="{{asset('CAMAG/lib/easing/easing.min.js') }}"></script>
    <script src="{{asset('CAMAG/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{asset('CAMAG/lib/owlcarousel/owl.carousel.min.js') }}""></script>
    <script src="{{asset('CAMAG/lib/lightbox/js/lightbox.min.js') }}""></script>
    <script defer src="https://unpkg.com/vanilla-counter" onload="initializeCounterRANDOMID()"></script>

    <!-- Template Javascript -->
    <script src="{{asset('CAMAG/js/main.js') }}"></script>
    <script src="{{asset('CAMAG/js/counter.js') }}"></script>
</body>
</html>