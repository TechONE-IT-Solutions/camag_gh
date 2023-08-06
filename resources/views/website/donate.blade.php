@extends('layouts/website')


@section('content')
<!-- Donation Form start -->

      <div class="container px-3 my-5">
        <div class="card shadow-lg border-0">
          <div class="card-body my-5">
              <div class="row justify-content-center align-items-center">
              <div class="col-lg-6">
                <img src="{{asset('CAMAG/img/donateNow.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-5">
                <form id="donateForm" method="POST" action="{{route ('pay')}}">
                    @csrf
                    <input type="hidden" name="email" value="test@email.com"> {{-- required --}}
                    <input type="hidden" name="payment_type" value="donation">
                  <!-- Name Input -->
                  <div class="form-floating mb-3">

                    <input class="form-control" id="name" type="text" name="name" placeholder="Name" data-sb-validations="required" />
                    <label for="name">Full Name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                  </div>

                  <div class="form-floating mb-3">
                      <input class="form-control" id="phone" type="tel" name="phone" placeholder="Phone Number" data-sb-validations="required" />
                      <label for="phone">Phone Number</label>
                      <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                    </div>


                  <div class="form-floating mb-3">
                      <input class="form-control" type="number" id="amount" name="amount" step="1.0" min="0" placeholder="Enter amount" required>
                      <label for="amount">Amount:</label>
                    <div class="invalid-feedback" data-sb-feedback="amount:required">Amount is required.</div>
                    </div>

                    <!-- Submit success message -->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                      </div>
                  </div>

                  <!-- Submit error message -->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                  </div>

                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Make Payment</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- End of Donation form -->


@endsection
