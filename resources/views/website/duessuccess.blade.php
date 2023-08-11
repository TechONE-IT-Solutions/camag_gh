<!-- 
<body>
    <div class="container">
        <!-- Your page content here -->

        <!-- @if(session('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
        @endif
</body>

</html> -->

@extends('layouts/website')


@section('content')

    <div class="container">
        <div class="wrapper d-flex justify-content-center py-5">
            <div class="card col-6">
                <div class="card-body text-center py-5">
                    <i class="bi bi-check2-circle display-1 text-success"></i>
                    <h3 class="text-success">Thank You</h3>
                    <p class="lead">Your payment was successful</p>
                    <div class="container">

                        <table class="table table-borderless">
                            <tr>
                                <td>Amt. Paid</td>
                                <td>1234</td>
                            </tr>
                            <tr>
                                <td>Trans. Ref</td>
                                <td>1234</td>
                            </tr>
                            <tr>
                                <td>Amount Paid</td>
                                <td>1234</td>
                            </tr>
                            
                        </table>
                    </div>
                    <a href="{{ route('website-home') }}" class="btn btn-outline-success">Go Back Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection        
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->