@extends('layouts/admin')


@section('content')

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Unit Committee Members</h5>

              <!-- Vertical Pills Tabs -->
                <div class="">

                @component('components.members_view_button')

                @endcomponent

                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Grid view Start -->
                    <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                        <div class="row">
                            <!-- @foreach($unitcommittee as $unit)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="{{asset($unit['photo']) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="text-center">
                                            <p class="col">{{ $unit['name']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach -->

                            @foreach($unitcommittee as $unit)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <a href="{{ route('profile', ['id' => $unit['id']]), 'memberId' => $unit['membership_id']]) }}">
                                    <div class="card">
                                        <div class="card-image">
                                        <img src="{{asset($unit['photo']) }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="text-center">
                                                <p class="col">{{ $unit['name']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <!-- Grid view end -->

                    <!-- Table Start -->
                    <div class="tab-pane fade" id="pills-tables" role="tabpanel" aria-labelledby="pills-tables-tab">
                        <div id="table">
                        <table id="unitCommitteeMember" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Member ID</th>
                                    <th scope="col">Electoral Area</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col" style="color:red">CLEAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($unitcommittee as $unit)
                                <tr>
                                    <td>{{ $unit['name']}}</td>
                                    <td>{{ $unit['gender']}}</td>
                                    <td>{{ $unit['membership_id']}}</td>
                                    <td>{{ $unit['electoral_area']}}</td>
                                    <td>{{ $unit['telephone_number']}}</td>
                                    <td>{{ $unit['email_address']}}</td>
                                    <td>
                                        <form action="{{ route('delete_assembly', $unit['id']) }}" method="POST" id="delete_assembly" class="assembly">
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
                    <!-- Table end -->

                </div>


            </div>
              <!-- End Vertical Pills Tabs -->

            </div>
        </div>

@endsection
