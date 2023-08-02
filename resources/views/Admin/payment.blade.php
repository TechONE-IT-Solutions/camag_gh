@extends('layouts/Admin')


@section('content')
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Payments</h3>

        <div class="row justify-content-end">
            <div class="col-5">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-success rounded-5 shadow-sm mb-5" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: #198754; --bs-nav-pills-link-active-bg: var(--bs-white); --bs-nav-link-hover-color: none;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-5" id="pills-dues-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" data-bs-target="#pills-dues">Dues</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="pills-donations-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-donations">Donations</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="pills-donations-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-settings">Settings</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-dues" role="tabpanel" aria-labelledby="pills-dues-tab">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Membership ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Amount Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Antwi Brian</td>
                            <td>054 449 6780</td>
                            <td>info@camaghana.com</td>
                            <td>200</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="tab-pane fade show" id="pills-donations" role="tabpanel" aria-labelledby="pills-donations-tab">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Antwi Brian</td>
                            <td>054 449 6780</td>
                            <td>1000000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade show" id="pills-settings" role="tabpanel" aria-labelledby="pills-donations-tab">
                <div class="container">
                    <div class="row d-flex">
                        <div class="card col">
                            <div class="card-header text-center p-3">
                                <div>CHANGE AMOUNT FOR DUES AND REGISTRATION</div>
                            </div>
                            <div class="card-body p-5">
                                <form action="{{ route('paymentpost')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">New amount in cedis</label>
                                        <input type="number" step="0.01" class="form-control" id="amount" name="amount">
                                    </div>

                                    <label>Choose what to update</label>
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="dropdown" data-sb-validations="required" name="regdues">
                                           <option disabled>Registration or Dues</option>
                                           <option value="U_registration">Registration</option>
                                            <option value="U_dues">Dues</option>
                                        </select>
                                        <label for="dropdown"></label>
                                        <div class="invalid-feedback" data-sb-feedback="dropdown:required">Please select an option.</div>
                                    </div>
                                    <div class="d-grid form-group mt-3">
                                        <button class="btn btn-success" type="submit">Update</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card col">
                            <div class="card-header text-center p-3">
                                <div>CURRENT AMOUNTS</div>
                            </div>
                            <div class="card-body p-5">
                                <div class="d-flex">
                                    <div class="col">
                                        <div class="text-center">
                                            <span style="font-size: 42px" class="text-success">₵{{ $uregistration }}</span>
                                        </div><hr>
                                        <div class="text-center">
                                            <span style="font-size: 18px;">Registration Current Amount</span>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="text-center">
                                            <span style="font-size: 42px" class="text-success">₵{{ $udues }}</span>
                                        </div><hr>
                                        <div class="text-center">
                                            <span style="font-size: 18px;">Current Amount for dues</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
