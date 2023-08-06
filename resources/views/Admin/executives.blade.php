@extends('layouts/Admin')


@section('content')
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Executives</h3>

            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 mb-2">
                    <form action="{{ route('post-executive') }}" class="form-control p-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="m-3">
                            <label class="form-label"  for="events">Executive's Image</label>
                            <input type="file" class="form-control" name="executive_pic" id="events">
                        </div>

                        <div class="m-3">
                            <label class="form-label"  for="executiveName">Executive's Name</label>
                            <input type="text" class="form-control" name="executive_name" id="executiveName">
                        </div>

                        <div class="m-3">
                            <label  class="form-label" for="executiveTitle">Executive's Title</label>
                            <input type="text" class="form-control" name="executive_title" id="eventTitle">
                        </div>

                        <button type="submit" class="btn btn-success px-4 m-4">Add</button>
                    </form>
                </div>

    
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="row">
                        @foreach($executives as $executive)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset($executive['image']) }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body text-center p-3">
                                    <h4>{{$executive['text']}}</h4>
                                    <p>{{$executive['textarea']}}</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <form method="post" class="delete_form" action="{{ route('executive.destroy', $executive['id']) }}">
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
            </div>
    </div>
</div>

@endsection