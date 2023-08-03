@extends('layouts/website')


@section('content')
<!-- Registration fee Payment Form Start -->
<!-- Registration Payment form -->

<div class="container regform rounded">
    <div class="row">
        <div class="form col-5 ms-3 hakim">
            <form accept-charset="UTF-8" id="registrationFeeForm" method="POST" enctype="multipart/form-data" action="{{ route('send') }}" novalidate>
                @csrf
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

                    <div class="form-floating mb-2">
                        <input class="form-control" id="phone" step="0.01" type="number" placeholder="Amount" data-sb-validations="required" disabled value="{{ $uregistration }}" />
                        <label for="phone">Amount</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                    </div>

                    <!-- Make payment button -->
                    <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Make Payment</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
