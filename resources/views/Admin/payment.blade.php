@extends('layouts/Admin')


@section('content')

<div class="row justify-content-end">
    <div class="col-5">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm mb-5" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="pills-dues-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-dues">Dues</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-5" id="pills-donation-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" data-bs-target="#donation-users">Donations</button>
            </li>
        </ul>
    </div>
</div>

<div class="tab-pane fade show active" id="pills-dues" role="tabpanel" aria-labelledby="pills-dues-tab">
    
</div>

<table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Electoral Area</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Antwi Brian</td>
                                    <td>Male</td>
                                    <td>Kwabenya Agyemankata</td>
                                    <td>054 449 6780</td>
                                    <td>info@camaghana.com</td>
                                </tr>
                            </tbody>
                        </table>

@endsection