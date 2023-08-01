@extends('layouts/Admin')


@section('content')

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Unit Committee Members</h5>

              <!-- Vertical Pills Tabs -->
                <div class="">

                @component('components.members_view_button')
                       
                @endcomponent

                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Start Start -->
                    <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <p class="col-6 label">Name:</p>
                                            <p class="col-6">John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset('CAMAGADMIN/assets/img/product-2.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <p class="col-6 label">Name:</p>
                                            <p class="col-6">John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset('CAMAGADMIN/assets/img/product-3.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <p class="col-6 label">Name:</p>
                                            <p class="col-6">John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset('CAMAGADMIN/assets/img/product-4.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <p class="col-6 label">Name:</p>
                                            <p class="col-6">John Doe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                
                    </div>
                    <!-- 'Start' end -->

                    <!-- Counter Start -->
                    <div class="tab-pane fade" id="pills-tables" role="tabpanel" aria-labelledby="pills-tables-tab">
                        
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
                    </div>
                    <!-- Counter end -->

                </div>

                    <div class="row justify-content-end m-3">
                        <div class="col-3">
                            <div class="button-group">
                                <button class="btn btn-secondary">Move</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>

              </div>
              <!-- End Vertical Pills Tabs -->

            </div>
        </div>

@endsection