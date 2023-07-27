@extends('layouts/Admin')


@section('content')
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Payments</h3>

        <div class="row justify-content-end">
            <div class="col-5">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm mb-5" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-5" id="pills-dues-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" data-bs-target="#pills-dues">Dues</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="pills-donations-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-donations">Donations</button>
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
        </div>
    </div>
</div>

@endsection