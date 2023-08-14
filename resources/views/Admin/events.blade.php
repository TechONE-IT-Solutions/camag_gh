@extends('layouts/Admin')


@section('content')
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Events</h3>
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 mb-2">
                    <form action="{{ route('events_post') }}" method="POST" class="form-control p-3" enctype="multipart/form-data">
                        @csrf
                        <div class="m-3">
                            <label class="form-label"  for="events">Event Image</label>
                            <input type="file" class="form-control" name="eventImage" id="events">
                        </div>

                        <div class="m-3">
                            <label class="form-label"  for="eventTitle">Event Title</label>
                            <input type="text" class="form-control" name="eventTitle" id="eventTitle">
                        </div>
                        <div class="m-3">
                            <label  class="form-label" for="eventText">Event Description</label>
                            <textarea name="eventText" id="eventText" class="form-control"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4 m-4">Add</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="row">
                        @foreach($events as $event)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset($event['image']) }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body text-center">
                                    <p class="fw-bold">{{( $event['text'] )}}</p>
                                    <p>{{ $event['textarea']}}</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <form method="post" class="cut_form" action="{{ route('events_destroy', $event['id']) }}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class=" btn btn-danger px-2">Delete</button>
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
