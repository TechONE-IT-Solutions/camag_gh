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
                                        <form action="{{ route('assemblymember_destroy') }}" method="POST" class="delete_form">
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
                    <!-- Tables end -->

                </div>
            </div>
            
              <!-- End Vertical Pills Tabs -->

    </div>
</div>
<script>
    $(document).ready(function(){
        $('.delete_form').on('submit',function(e){
            e.preventDefault();
            if(confirm('Are you sure you want to trash this member permanently?')){
                return true;
            }
            else{
                return false;
            }
        });
    });
</script>
@endsection