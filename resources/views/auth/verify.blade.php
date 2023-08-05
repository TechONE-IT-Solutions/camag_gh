<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CAMAG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('CAMAGADMIN/assets/img/favicon.png') }}" rel="icon">
  <!-- <link href="{{asset('CAMAGADMIN/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="{{asset('CAMAGADMIN/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/img/icon/icon-7.png') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{asset('CAMAGADMIN/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('CAMAGADMIN/assets/css/style.css') }}" rel="stylesheet">

</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="{{asset('CAMAGADMIN/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('CAMAGADMIN/assets/js/main.js') }}"></script>

</body>

</html>
