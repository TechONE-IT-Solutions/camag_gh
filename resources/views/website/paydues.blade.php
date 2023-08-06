@extends('layouts/website')


@section('content')
<!-- Dues Payment Form Start -->

  <div class="container px-3 mb-5">
    <div class="card border-0 rounded-3 shadow-lg">
      <div class="card-body p-5">
        <div class="row justify-content-center ">
          <div class="col-lg-5 m-3">
            <form id="donationForm">
              <!-- Name Input -->
                <div class="form-floating mb-2">
                  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                  <label for="name">Name</label>
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <div class="form-floating mb-2">
                    <input class="form-control" id="memberid" type="text" placeholder="Member ID" data-sb-validations="required" />
                    <label for="Memberid">Member ID</label>
                    <div class="invalid-feedback" data-sb-feedback="memberid:required">Member Id is required.</div>
                  </div>

                  <div class="form-floating mb-2">
                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" data-sb-validations="required" />
                    <label for="phone">Phone Number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                  </div>


                  <div class="form-floating mb-2">
                    <select class="form-select" id="dropdown" data-sb-validations="required">
                      <option value="option1">One Month</option>
                        <option value="option2">Three Months</option>
                        <option value="option3">Six Months</option>
                        <option value="option4">One Year</option>
                        <option value="option5">Two Years</option>
                        <option value="option6">Three Years</option>
                        <option value="option7">Four Years</option>
                    </select>
                    <label for="dropdown">Month To Pay</label>
                    <div class="invalid-feedback" data-sb-feedback="dropdown:required">Please select an option.</div>
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
          <div class="col-lg-6 m-3">
            <img src="{{asset('CAMAG/img/pay.png') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Dues Payment form -->

@endsection
