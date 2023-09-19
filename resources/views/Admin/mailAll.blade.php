@extends('layouts/admin')


@section('content')
    <div class="p-2">
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body p-5">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-success rounded-5 shadow-sm mb-5" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: #198754; --bs-nav-pills-link-active-bg: var(--bs-white); --bs-nav-link-hover-color: none;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active rounded-5" id="pills-mail-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="true" data-bs-target="#pills-mail">Mail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-5" id="pills-sms-tab" data-bs-toggle="pill" type="button" role="tab" aria-selected="false" data-bs-target="#pills-sms">SMS</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    
                <div class="tab-pane fade show active" id="pills-mail" role="tabpanel" aria-labelledby="pills-mail-tab">

                    <div class="card p-4">
                        <div class="card-body">
                            <h3 class="page-title">Compose Email</h3>
                                <form method="POST" action="{{ route('composeForAllPost')}}">
                                    @csrf
                                    <div class="row g-3">
                                        <input type="hidden" class="form-control" name="mail_name" id="name" placeholder="Your Name" value="CAMAG">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" name="mail_email" class="form-control" id="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" name="mail_head" class="form-control" id="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="mail_body" style="height: 200px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="pills-sms" role="tabpanel" aria-labelledby="pills-sms-tab">
                        <div class="d-flex justify-content-center">
                            <div class="card col-lg-6 col-md-6 col-sm-12 p-5">
                                <div class="mb-3">
                                    <textarea name="sms" id="sms" type="text" placeholder="SMS Body" data-sb-validations="required" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-success">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>

@endsection
