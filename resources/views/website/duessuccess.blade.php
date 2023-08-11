@extends('layouts/website')


@section('content')

    <div class="container">
        <div class="wrapper d-flex justify-content-center py-5">
            <div class="card col-6">
                <div class="card-body text-center py-5">
                    <i class="bi bi-check2-circle display-1 text-success"></i>
                    <h3 class="text-success">Thank You</h3>
                    <p class="lead">Your payment was successful</p>
                    <div class="container">

                        <table class="table table-borderless">
                            <tr>
                                <td>Mem. ID</td>
                                <td>ASM12345</td>
                            </tr>
                            <tr>
                                <td>Trans. Ref</td>
                                <td>123464070</td>
                            </tr>
                            <tr>
                                <td>Amt. Paid</td>
                                <td>GH₵10</td>
                            </tr>
                            
                        </table>
                    </div>
                    <a href="{{ route('website-home') }}" class="btn btn-outline-success">Go Back Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection        
  