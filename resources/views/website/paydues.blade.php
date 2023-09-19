@extends('layouts/website')


@section('content')
<!-- Dues Payment Form Start -->

  <div class="container px-3 mb-5">
    <div class="card border-0 rounded-3 shadow-lg">
      <div class="card-body p-5">
        <div class="row justify-content-center ">
          <div class="col-lg-5 m-3">
            <form id="donationForm" method="POST" action="{{route ('pay')}}">
                @csrf
                <input type="hidden" name="payment_type" value="dues">
                <input type="hidden" name="email" value="test@email.com">
              <!-- Name Input -->

                <div class="form-floating mb-2">
                    <input class="form-control" id="memberid" name="memberId" type="text" placeholder="Member ID" data-sb-validations="required" />
                    <label for="Memberid">Member ID</label>
                    <div class="invalid-feedback" data-sb-feedback="memberid:required">Member ID is required.</div>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control MemberBliss" id="name" type="text" name="name" placeholder="Name" data-sb-validations="required" />
                    <label for="name">Name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                  <div class="form-floating mb-2">
                    <input class="form-control MemberBliss" id="phone" type="tel" name="phone" placeholder="Phone Number" data-sb-validations="required" />
                    <label for="phone">Phone Number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Phone Number is required.</div>
                  </div>


                  <div class="form-floating mb-2">
                    <select class="form-select" id="dropdown" name="amount" data-sb-validations="required">
                        <option value="{{ $udues }}">One Month</option>
                        <option value="{{ 3 * $udues }}">Three Months</option>
                        <option value="{{ 6 * $udues }}">Six Months</option>
                        <option value="{{ 12 * $udues }}">One Year</option>
                        <option value="{{ 24 * $udues }}">Two Years</option>
                        <option value="{{ 36 * $udues }}">Three Years</option>
                        <option value="{{ 48 * $udues }}">Four Years</option>
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

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="h2 text-success"><i class="bi bi-check2-circle"></i>Payment Successful</p>

        <table class="table">
          <tr>
            <td>Trans. Ref.</td>
            <td>35423657636</td>
          </tr>
          <tr>

          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.getElementById('memberid').addEventListener('keyup', function() {
        console.log('key pressed')
        const memberID = this.value;
        // Send an AJAX request to the backend to fetch member details
        fetch(`/get-member/${memberID}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('name').value = data.memberName;
                    document.getElementById('phone').value = data.memberphone;
                }
            });
    });
</script>
@endsection
