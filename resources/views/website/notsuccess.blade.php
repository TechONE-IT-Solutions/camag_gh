@extends('layouts/website')


@section('content')
<div class="container p-5">
    <div class="d-flex justify-content-center m-5">
        <div class="card border-danger col-6 p-5">
            <div class="card-body text-center">
                <i class="bi bi-x-circle display-2 text-danger"></i>
                <h2>Transaction Failed</h2>
                <p>Your payment was not Successful.Try Again</p>
            </div>
        </div>
    </div>
</div>

@endsection