@extends('layouts/Admin')


@section('content')
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Home Page</h5>

              <!-- Vertical Pills Tabs -->
                <div class="">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-success rounded-5 shadow-sm mb-4" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: #198754; --bs-nav-pills-link-active-bg: var(--bs-white); --bs-nav-link-hover-color: none;">
                        <li class="nav-item">
                            <button class="nav-link active rounded-5" id="pills-start-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" aria-controls="pills-start" data-bs-target="#pills-start">Banner</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-5" id="pills-stats-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" aria-controls="pills-stats" data-bs-target="#pills-stats">Numbers</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-5" id="pills-news-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" aria-controls="pills-news" data-bs-target="#pills-news">News</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-5" id="pills-team-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" aria-controls="pills-team" data-bs-target="#pills-team">Team</button>
                        </li>
                        </ul>
                    </div>
                </div>

                 <div class="tab-content" id="pills-tabContent">
                    <!-- Start Start -->
                    <div class="tab-pane fade show active" id="pills-start" role="tabpanel" aria-labelledby="pills-start-tab">
                        <div class="row">

                                <div class="col-6">
                                    <form method="POST" action="{{ route('h_banner') }}" enctype="multipart/form-data" class="form-control p-3">
                                        @csrf
                                        <div class="my-3">
                                            <label for="startImage" class="form-label">Start Image</label>
                                            <input type="file" name="image" id="startImage" class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <label for="startText" class="form-label">Start Text</label>
                                            <input type="text" name="text" class="form-control" id="startText">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="px-4 btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>

                            <div class="col-6">
                                <div class="row">
                                    @foreach($h_banner as $banner)
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset($banner['image']) }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="card-body p-3">
                                                {{$banner['text']}}
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <form method="post" class="delete_form" action="{{ route('homepage.destroy', $banner['id']) }}">
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
                    <!-- 'Start' end -->

                    <!-- Counter Start -->
                    <div class="tab-pane fade" id="pills-stats" role="tabpanel" aria-labelledby="pills-Stats-tab">
                        <div class="row">
                            <div class="col-5">
                                <form class="form-control p-3" method="POST" action="{{ route('number') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="my-3">
                                        <label for="statsText" class="form-label">Counter Text</label>
                                        <input type="text" name="text" id="statNumber" class="form-control">
                                    </div>
                                    <div class="my-3">
                                        <label for="statsNumber" class="form-label">Counter Number</label>
                                        <input type="number" name="number" id="statsText" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-3">Add</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-7">
                                <div class="row justify-content-end">
                                    @foreach($number as $numdata)
                                    <div class="col-6 text-center">
                                        <div class="card p-4">
                                            <div class="card-body">
                                                <h2>{{$numdata['number']}}</h2>
                                                <p class="lead">{{$numdata['text']}}</p>
                                            </div>
                                            <div class="col-12">
                                                <form method="post" class="clear_form" action="{{ route('homepage.clear', $numdata['id']) }}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class=" btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Counter end -->

                    <!-- News Start -->
                    <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                        <div class="row">
                            <div class="col-6">
                                <form class="form-control" method="POST" action="{{ route('news') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="m-3">
                                        <label for="newsImage" class="form-label">News Image</label>
                                        <input type="file" name="newsImage" id="newsImage" class="form-control">
                                    </div>
                                    <div class="m-3">
                                        <label for="newsHeadline" class="form-label">News Headline</label>
                                        <input type="text" name="newsHeadline" id="newsHeadline" class="form-control">
                                    </div>
                                    <div class="m-3">
                                        <label for="newsDescription" class="form-label">News Description</label>
                                        <textarea name="newsBody" id="mysummernote" style="height: 400px;" class="form-control"></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary m-3 px-4">Add</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    @foreach($news as $new)
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset($new['image']) }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h4>{{$new['text']}}</h4>
                                                <P>{{$new['textarea']}}</P>
                                            </div>
                                            <div class="col-12 justify-content-center d-flex">
                                                <form method="post" class="cut_form" action="{{ route('homepage.cut', $new['id']) }}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class=" btn btn-danger px-4">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News End -->

                    <!-- Team Start -->
                    <div class="tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
                        <div class="row">
                            <div class="col-6">
                                <form class="form-control" method="POST" action="{{ route('team') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="m-3">
                                        <label for="teamImage" class="form-label">Team Member's Image</label>
                                        <input type="file" name="teamImage" id="teamImage" class="form-control">
                                    </div>
                                    <div class="m-3">
                                        <label for="teamName" class="form-label">Name</label>
                                        <input type="text" name="teamName" id="teamName" class="form-control">
                                    </div>
                                    <div class="m-3">
                                        <label for="teamTitle" class="form-label">Title</label>
                                        <textarea name="teamTitle" id="teamTitle" style="height: 120px;" class="form-control"></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary m-3 px-4">Add</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    @foreach($teams as $team)
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset($team['image']) }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h3>{{$team['text']}}</h3>
                                                <p>{{$team['textarea']}}</p>
                                            </div>
                                            <div class="col-12 justify-content-center d-flex">
                                                <form method="post" class="eliminate_form" action="{{ route('homepage.eliminate', $team['id']) }}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class=" btn btn-danger px-4">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    <!-- Team End -->


                </div>
              </div>
              <!-- End Vertical Pills Tabs -->
            </div>
        </div>


@endsection




