@extends('layouts/website')


@section('content')

<div class="container d-flex justify-content-center my-5 ">
    <div class="card col-lg-6 p-5">
        <div class="card-body text-center">
            <h2 class="text-success">Payment Successful</h2>
            <i class="bi bi-check2-circle display-1 text-success"></i>
            <p class="text-lead mb-5 mt-3">Thank You so much for your generous donation.Your support means a lot to us and will make a positive impact.</p>
            <table class="table">
                <tr>
                    <td>Trans. Ref.</td>
                    <td>564773568774</td>
                </tr>
                <tr>
                    <td>Amt. Paid</td>
                    <td>GH₵ 200</td>
                </tr>
            </table>
            <a href="{{ route('website-home') }}" class="btn btn-outline-success">Go Back Home</a>
        </div>
    </div>
</div>

@endsection        
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->
