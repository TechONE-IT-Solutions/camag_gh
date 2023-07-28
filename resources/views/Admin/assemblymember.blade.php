@extends('layouts/Admin')


@section('content')


<div class="card">
    <div class="card-body">
        <h5 class="card-title text-secondary">Assembly Members</h5>

              <!-- Vertical Pills Tabs -->
            <div class="">

                    @component('components.members_view_button')
                        
                    @endcomponent

                <div class="tab-content" id="pills-tabContent">
                    <!-- Grid View Start -->
                    <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">

                        <div class="row">
                            @foreach($assemblymen as $assemblyman)    
                            <div class="col-3">
                                <a href="{{ route('profile') }}">
                                    <div class="card">
                                        <div class="card-image">
                                        <img src="{{ asset($assemblyman['photo']) }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <p class="col label">Name:</p>
                                                <p class="col">{{ $assemblyman['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- Grid View end -->

                    <!-- Tables Start -->
                    <div class="tab-pane fade" id="pills-tables" role="tabpanel" aria-labelledby="pills-tables-tab">

                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Electoral Area</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col" style="color:red">CLEAR</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($assemblymen as $assemblyman)
                            
                                <tr >
                                    <td>{{ $assemblyman['name'] }}</td>
                                    <td>{{ $assemblyman['gender'] }}</td>
                                    <td>{{ $assemblyman['electoral_area'] }}</td>
                                    <td>{{ $assemblyman['telephone_number'] }}</td>
                                    <td>{{ $assemblyman['email_address'] }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger me-2" data-toggle="modal" data-target="#exampleModalCenter"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                           
                            @endforeach
                            </tbody>
                        </table>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-info text-white">
                                        This member will be deleted permanently from the database, Are you sure you want to continue the process?
                                    </div>
                                    <div class="modal-footer bg-primary">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-danger">Yes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <!-- Tables end -->

                </div>
            </div>
            
              <!-- End Vertical Pills Tabs -->

    </div>
</div>

@endsection