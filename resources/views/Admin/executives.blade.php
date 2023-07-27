@extends('layouts/Admin')


@section('content')
<div class="wrapper bg-white p-4 rounded">
    <div class="row">
        <h3 class="page-title">Executives</h3>

            <div class="row">
                <div class="col-5">
                    <form action="" class="form-control p-3">
                        <div class="m-3">
                            <label class="form-label"  for="events">Executive's Image</label>
                            <input type="file" class="form-control" name="event" id="events">
                        </div>

                        <div class="m-3">
                            <label class="form-label"  for="executiveName">Executive's Name</label>
                            <input type="text" class="form-control" name="eventTitle" id="executiveName">
                        </div>

                        <div class="m-3">
                            <label  class="form-label" for="executiveTitle">Executive's Title</label>
                            <input type="text" class="form-control" name="eventText" id="eventTitle">
                        </div>

                        <button type="button" class="btn btn-primary px-4 m-4">Add</button>
                    </form>
                </div>

    
                <div class="col-7">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body text-center p-3">
                                    <h4>Prem Kumar</h4>
                                    <p>Facilitator</p>
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