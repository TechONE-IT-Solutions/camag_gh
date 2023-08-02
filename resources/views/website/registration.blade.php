@extends('layouts/website')


@section('content')
<!-- Registration fee Payment Form Start -->

<div class="container px-3 my-5">
    <div class="row justify-content-center ">
      <div class="col-lg-6">
        <div class="card border-0 rounded-3 shadow-lg">
          <div class="card-body p-4">
            <div class="text-center ">
              <div class="h3 fw-light">Registration Fee</div>
              
            </div>
            <div class="row">
              <div class="col" id="registrationFee">
                <form id="registrationFeeForm">
                 <!-- Name Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                      <label for="name">Name</label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>
            
                      <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="Phone Number" data-sb-validations="required" />
                        <label for="phone">Phone Number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                      </div>
            
                      <p class="lead">The Registration Fee is <span>100</span> Cedis</p>
                   
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
            
                    <!-- Make payment button -->
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
<!-- Registration Payment form -->

@endsection