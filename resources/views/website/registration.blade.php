@extends('layouts/website')


@section('content')
<!-- Registration fee Payment Form Start -->

    {{-- <div class="container px-3 my-5">
        <div class="row justify-content-center ">
            <div class="col-7">
                    <div class="row" id="registrationFee" style="object-fit: contain">
                        <div class="col-5 p-5">
                            <form id="registrationFeeForm">
                            <!-- Name Input -->
                                <div class="form-floating mb-2">
                                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                                <label for="name">Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                                </div>

                                <p class="lead">The Registration Fee is <span>100</span> Cedis</p>

                                <!-- Make payment button -->
                                <div class="d-grid">
                                <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Make Payment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div> --}}
<!-- Registration Payment form -->

<div class="container regform" style="">
    <div class="row">
        <div class="form col-5 ms-3 hakim">
            <form id="registrationFeeForm">
                <!-- Name Input -->
                    <div class="form-floating mb-2">
                        <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                        <label for="name">Name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">
                            Name is required.
                        </div>
                    </div>

                    <div class="form-floating mb-2">
                        <input class="form-control" id="phone" type="tel" placeholder="Phone Number" data-sb-validations="required" />
                        <label for="phone">Phone Number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                    </div>

                    <p class="lead text-success">The Registration Fee is <span style="font-size: 20px; font-weight:500">₵100</span></p>

                    <!-- Make payment button -->
                    <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Make Payment</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
