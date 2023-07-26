@extends('layouts/Admin')


@section('content')
  
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Home Page</h5>

              <!-- Vertical Pills Tabs -->
                <div class="">

                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm mb-4" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                <li class="nav-item">
                    <button class="nav-link active rounded-5" id="pills-start-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" aria-controls="pills-start" data-bs-target="#pills-start">Home</button>
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

                 <div class="tab-content" id="pills-tabContent">
                    <!-- Start Start -->
                    <div class="tab-pane fade show active" id="pills-start" role="tabpanel" aria-labelledby="pills-start-tab">
                        <div class="row">

                                <div class="col-6">
                                    <form class="form-control p-3">
                                        <div class="my-3">
                                            <label for="startImage" class="form-label">Start Image</label>
                                            <input type="file" name="Start Image" id="startImage" class="form-control">
                                        </div>
                                        <div class="my-3">
                                            <label for="startText" class="form-label">Start Text</label>
                                            <input type="text" name="startText" class="form-control" id="startText">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="px-4 btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="card-body p-3">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, neque?
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary mb-2">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-2.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="card-body p-3">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, neque?
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary mb-2">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="card-body p-3">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, neque?
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary mb-2">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <!-- 'Start' end -->

                    <!-- Counter Start -->
                    <div class="tab-pane fade" id="pills-stats" role="tabpanel" aria-labelledby="pills-Stats-tab">
                        <div class="row">
                            <div class="col-5">
                                <form class="form-control p-3">
                                    <div class="my-3">
                                        <label for="statsText" class="form-label">Counter Text</label>
                                        <input type="number" name="statsNumber" id="statNumber" class="form-control">
                                    </div>
                                    <div class="my-3">
                                        <label for="statsNumber" class="form-label">Counter Number</label>
                                        <input type="number" name="statsText" id="statsText" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary px-3">Add</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-7">
                                <div class="row justify-content-end">
                                    <div class="col-6 text-center">
                                        <div class="card p-4">
                                            <div class="card-body">
                                                <h2>6</h2>
                                                <p class="lead">Years Of Establishment</p>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class=" btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 text-center">
                                        <div class="card p-4">
                                            <div class="card-body">
                                                <h2>118</h2>
                                                <p class="lead">Municipal Assemblies</p>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Counter end -->

                    <!-- News Start -->
                    <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                        <div class="row">
                            <div class="col-6">
                                <form class="form-control">
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
                                            <textarea name="" id="newsDescription" style="height: 120px;" class="form-control" "></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary m-3 px-4">Add</button>
                                    </div>
                                </form>    
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h4>CAMAG AWARDS</h4>
                                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, qui.</P>
                                            </div>
                                            <div class="col-12 justify-content-center d-flex">
                                                <button type="button" class="btn btn-primary mb-3 px-4">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h4>CAMAG AWARDS</h4>
                                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, qui.</P>
                                            </div>
                                            <div class="col-12 justify-content-center d-flex">
                                                <button type="button" class="btn btn-primary mb-3 px-4">Delete</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h4>CAMAG AWARDS</h4>
                                                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, qui.</P>
                                            </div>
                                            <div class="col-12 justify-content-center d-flex">
                                                <button type="button" class="btn btn-primary mb-3 px-4">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News End -->

                    <!-- Team Start -->
                    <div class="tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
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
                                            <input name="teamTitle" id="teamTitle" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h3>John Doe</h3>
                                                <p>Chief Executive Officer</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{asset('CAMAGADMIN/assets/img/product-1.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-body">
                                                <h3>John Doe</h3>
                                                <p>Chief Executive Officer</p>
                                            </div>
                                        </div>
                                    </div>

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




