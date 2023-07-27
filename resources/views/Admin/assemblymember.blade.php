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

                        @component('components.members_view_cards')

                        @endcomponent
                
                    </div>
                    <!-- Grid View end -->

                    <!-- Tables Start -->
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
                            @foreach($assemblymen as $assemblyman)
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $assemblyman['name'] }}</td>
                                    <td>{{ $assemblyman['gender'] }}</td>
                                    <td>{{ $assemblyman['electoral_area'] }}</td>
                                    <td>{{ $assemblyman['telephone_number'] }}</td>
                                    <td>{{ $assemblyman['email_address'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- Tables end -->

                </div>
              </div>
              <!-- End Vertical Pills Tabs -->

            </div>
        </div>

@endsection