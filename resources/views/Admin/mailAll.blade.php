@extends('layouts/Admin')


@section('content')
    <div class="wrapper bg-light p-2">
        @if(session('message'))
            <div class="alert alert-{{ session('status') }}">
                {{ session('message') }}
            </div>
        @endif

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

@endsection
