@extends('layouts/Admin')


@section('content')
<div class="container bg-light">
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mb-2">
            <form class="form-control p-5">
                    <label for="aboutImage">About Image</label>
                    <input type="file" name="aboutImage" id="aboutImage" class="form-control">
                    <button type="button" class="btn btn-success px-4 m-3">Add</button>
            </form>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body pt-3">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body pt-3">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="card-body pt-3">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection