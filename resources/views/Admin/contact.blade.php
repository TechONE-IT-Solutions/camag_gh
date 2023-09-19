@extends('layouts/admin')


@section('content')
    <div class="wrapper bg-light p-2">
        <div id="table">
            <table id="notificationTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mails as $mail)
                    <tr>
                        <td>{{ $mail['mail_name']}}</td>
                        <td>{{ $mail['mail_email']}}</td>
                        <td>{{ $mail['mail_head']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
