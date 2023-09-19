@extends('layouts/admin')


@section('content')

        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif

<div class="wrapper bg-white p-4 rounded">
<h3 class="page-title">Users Settings</h3>
    <div class="row">
       

        <div class="row justify-content-end">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-success rounded-5 shadow-sm mb-5" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: #198754; --bs-nav-pills-link-active-bg: var(--bs-white); --bs-nav-link-hover-color: none;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-5" id="pills-dues-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" data-bs-target="#pills-dues">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="pills-donations-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-donations">Password</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="pills-admin-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-admin">Add New Admin</button>
                    </li>
                   
                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-dues" role="tabpanel" aria-labelledby="pills-dues-tab">

                <form class="form-control p-3" action="{{ route('user_settings_profile_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-success px-3">Update Profile</button>
                    </div>
                </form>
              
            </div>
       


            <div class="tab-pane fade show" id="pills-donations" role="tabpanel" aria-labelledby="pills-donations-tab">
              
            <form class="form-control p-3" action="{{ route('user_settings_password_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" value="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" value="" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success px-3">Change Password</button>
                    </div>
                </form>

            </div>

            <div class="tab-pane fade show" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
              
              <form class="form-control p-3" action="{{ route('add_admin_post') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>

                      <div class="mb-3">
                          <label for="email" class="form-label">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>

                      <div class="mb-3">
                      <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>

                      <div class="col-12">
                          <button type="submit" class="btn btn-success px-3">Submit</button>
                      </div>
                  </form>
  
              </div>

        </div>

    </div>
</div>

@endsection
