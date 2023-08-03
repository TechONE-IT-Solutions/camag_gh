@extends('layouts/Admin')


@section('content')
    <div class="wrapper bg-light p-2">
        <div id="table">
            <table id="notificationTable" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Antwi Brian</td>
                        <td>infocamaghana@gmail.com</td>
                        <td>Acknowledgement</td>
                        <td>You guys are doing a great work</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection