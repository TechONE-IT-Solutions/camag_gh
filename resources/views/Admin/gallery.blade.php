@extends('layouts/Admin')


@section('content')
<div class="wrapper bg-white">
    <div class="row">
        <!-- Gallery Form start -->
        <div class="col-5">
            <form class="form-control p-3" action="">
                <div class="mb-3">
                    <label for="gallery" class="form-label">Gallery Image</label>
                    <input type="file" name="galleryImage" id="galleryImage" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="gallerytext" class="form-label">Image Text</label>
                    <input type="text" name="galleryText" id="galleryText" class="form-control">
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary px-3">Add</button>
                </div>
            </form>
        </div>
        <!-- Gallery Form End -->

        <!-- Gallery Image Start -->
        <div class="col-7">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4>During our Annual meeting</h4>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-4 m-2">Delete</button>
                        </div>
                    </div>
                </div>
            
                <div class="col">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4>During our Annual meeting</h4>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-4 m-2">Delete</button>
                        </div>
                    </div>
                </div>
    
                <div class="col">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4>During our Annual meeting</h4>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-4 m-2">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Cards Start -->
    </div>
</div>
@endsection