@extends('layouts/Admin')


@section('content')
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Events</h3>
            <div class="row">
                <div class="col-5">
                    <form action="" class="form-control p-3">
                        <div class="m-3">
                            <label class="form-label"  for="events">Event Image</label>
                            <input type="file" class="form-control" name="event" id="events">
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
                            <button type="button" class="btn btn-primary px-4 m-4">Add</button>
                        </div>
                    </form>
                </div>
    
                <div class="col-7">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body text-center">
                                    <h4>Annual Executive Meeting</h4>
                                    <p>This event will be held at the Our head office.</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary px-4 m-2">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection