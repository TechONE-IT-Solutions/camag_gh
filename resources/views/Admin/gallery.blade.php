@extends('layouts/Admin')


@section('content')
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
<div class="wrapper bg-white p-4">
    <div class="row">
        <h3 class="page-title">Gallery</h3>
        <!-- Gallery Form start -->
        <div class="col-5">
            <form class="form-control p-3" action="{{ route('post-gallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="gallery" class="form-label">Gallery Image</label>
                    <input type="file" name="galleryImage" id="galleryImage" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="gallerytext" class="form-label">Image Text</label>
                    <input type="text" name="galleryText" id="galleryText" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-3">Add</button>
                </div>
            </form>
        </div>
        <!-- Gallery Form End -->

        <!-- Gallery Image Start -->
        <div class="col-7">
            <div class="row">
                @foreach($Gallery as $image)
                <div class="col">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset($image['image']) }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body text-center">
                            <h4>{{($image['text'])}}</h4>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <form method="post" class="delete_pic" action="{{ route('delete-gallery', $image['id']) }}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger mb-2">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Gallery Cards Start -->
    </div>
</div>
@endsection