@extends('layouts/website')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body activation-card d-flex justify-content-center align-items-center">

            <div class="col-4 d-md-block d-none">
                <img src="{{ asset('CAMAG\img\payment-activation.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 m-sm-2">
                <div class="">
                    <form action="{{ route('activationPost')}}" class="" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" id="activate" required name="activate" value="{{ old('emergency_relation') }}" pattern="^[A-Za-z]{3}-\d{5}$">
                            <label for="activate" class="form-label">Your MEMBERSHIP ID</label>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary">Activate</button>
                        </div>
                    </form>
                    <div>
                        @if(session('message'))
                            <p class=" alert alert-{{ session('status') }} text-center text-success">
                                {{ session('message') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>


@endsection
