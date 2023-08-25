@extends('layouts/website')

@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <form action="{{ route('activationPost')}}" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control" id="activate" required name="activate" value="{{ old('emergency_relation') }}" pattern="^[A-Za-z]{3}-\d{5}$">
                    <label for="activate" class="form-label">Your MEMBERSHIP ID</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div>
                    <button class="btn btn-primary">Activate</button>
                </div>
            </form>
        </div>
        <div>
            @if(session('message'))
                <h1 class=" alert alert-{{ session('status') }} text-center text-success">
                    {{ session('message') }}
                </h1>
            @endif
        </div>
    </div>
</div>


@endsection
