@extends('layouts/website')


@section('content')
<!-- Registration fee Payment Form Start -->
<!-- Registration Payment form -->

<div class="container regform rounded">
    <div class="row">
        <div class="form col-lg-5 col-sm-12 ms-3 hakim">
            <form accept-charset="UTF-8" id="registrationFeeForm" method="POST" enctype="multipart/form-data" action="{{ route('pay') }}" novalidate>
                @csrf

                <input type="hidden" name="email" value="test@email.com"> {{-- required --}}
                    <div class="form-floating mb-2">
                        <input class="form-control" id="name" type="text" name="name" placeholder=" Full Name" data-sb-validations="required"  required/>
                        <label for="name">Name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">
                            Name is required.
                        </div>
                    </div>

                    <div class="form-floating mb-2">
                        <input class="form-control" id="phone" type="tel" name="phone" placeholder="Phone Number" data-sb-validations="required" />
                        <label for="phone">Phone Number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                    </div>

                    <div class="form-floating mb-2">
                        <input class="form-control" id="amount" name="amount" type="hidden" placeholder="Amount" data-sb-validations="required" value="{{ $uregistration }}" oninput="convertToPesewas()" required />
                    </div>

                        <label for="phone">Registration fee is {{ $uregistration }} </label>

                    <!-- Make payment button -->
                    <div class="d-grid">
                        <p>
                            <button class="btn btn-success btn-lg btn-block" type="submit" >
                                <i class="fa fa-plus-circle fa-lg"></i> Pay to Register
                            </button>
                        </p>
                    </div>
            </form>
            </form>
        </div>
    </div>
</div>

<script>
    // Attach an event listener to the input field to handle user input
    document.getElementById('amount').addEventListener('input', function() {
        const userInput = parseFloat(this.value); // Get the amount entered by the user
        if (!isNaN(userInput)) {
            const amountInPesewas = userInput * 100; // Convert to pesewas (lowest currency unit for GHS)
            this.dataset.pesewas = amountInPesewas; // Store the pesewas value in the "data-pesewas" attribute
        }
    });
</script>

@endsection
