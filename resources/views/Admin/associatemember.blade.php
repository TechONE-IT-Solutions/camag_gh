@extends('layouts/Admin')


@section('content')
@if(session('message'))
    <div class="alert alert-{{ session('status') }}">
        {{ session('message') }}
    </div>
@endif

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Associate Members</h5>

              <!-- Vertical Pills Tabs -->
                <div class="">

                   @component('components.members_view_button')

                   @endcomponent

                    <div class="tab-content" id="pills-tabContent">
                    <!-- Start Start -->
                    <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                        <div class="row">
                            @foreach($associates as $associate)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset($associate['photo']) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <p class="col-6 label">Name:</p>
                                            <p class="col-6">{{$associate['name'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <!-- 'Start' end -->

                    <!-- Counter Start -->
                    <div class="tab-pane fade" id="pills-tables" role="tabpanel" aria-labelledby="pills-tables-tab">
                    <div id="table">
                        <table id="associateMember" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Electoral Area</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col text-danger">Clear</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($associates as $associate)
                                <tr>
                                    <td>{{$associate['name'] }}</td>
                                    <td>{{$associate['gender'] }}</td>
                                    <td>{{$associate['electoral_area'] }}</td>
                                    <td>{{$associate['telephone_number'] }}</td>
                                    <td>{{$associate['email_address'] }}</td>
                                    <td>
                                        <form action="{{ route('associate_destroy', $associate['id']) }}" method="POST" class="assembly">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="btn btn-danger me-2"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
              </div>
              <!-- End Vertical Pills Tabs -->

            </div>
    </div>

@endsection
