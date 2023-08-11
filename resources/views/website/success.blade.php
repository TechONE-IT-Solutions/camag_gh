<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        Your page content here -->

        <!-- @if(session('message'))
        <div class="alert alert-{{ session('status') }}">
            {{ session('message') }}
        </div>
        @endif
</body>

</html>  -->

@extends('layouts/website')


@section('content')
 <div class="container d-flex justify-content-center">
        <div class="card border-1 registerInvoice col-10">
            <div class="card-body">
                <div id="invoice-POS">
                    <center id="top">
                        <div class="logo d-flex justify-content-end me-1">
                            <img src="{{asset('CAMAG/img/logo.png') }}" style="max-width: 210px;" class="img-fluid" alt="">
                        </div>
                    </center><!--End InvoiceTop-->
                
                     <div id="mid">
                        <div class="info d-flex">
                            <div>
                                <p> 
                                    Mem. ID : 000001</br>
                                    Trans Ref: 423522537<br>
                                    Email   : JohnDoe@gmail.com</br>
                                    Phone   : 555-555-5555</br>
                                </p>
                            </div>
                            <div class="ms-auto">
                                <h3>Contact Info</h3>
                                <p> 
                                    Location : Labone, Accra<br>
                                    Email   : info@camaghana.com</br>
                                    Phone   : 02456778999</br>
                                </p>
                            </div>
                        </div>
                    </div>
                 </div>
                 <!-- End Invoice Mid  -->
            
                 <div id="bot">
                    <div id="table">
                        <table class="table">
                            <tr class="tabletitle">
                                <td class="item"><h2>Item</h2></td>
                                <td class="Rate"><h2>Amount</h2></td>
                            </tr>

                            <tr class="service">
                                <td class="tableitem"><p class="itemtext">Registration Fee</p></td>
                                <td class="tableitem"><p class="itemtext">$375.00</p></td>
                            </tr>

                            <tr class="tabletitle">
                                <td class="Rate"><h2>Total</h2></td>
                                <td class="payment"><h2>$375.00</h2></td>
                            </tr>
                        </table>
                    </div>
                    <!-- End Table -->

                     <div id="legalcopy text-center">
                        <p class="legal"><strong>Thank you!</strong> 
                        </p>
                    </div>
                </div><!--End InvoiceBot-->
            </div><!--End Invoice-->
        </div>
    </div> 
    <div class="col-12 d-flex justify-content-center mt-2">
        <button type="button" onclick="window.print()" class="btn btn-outline-success px-3 py-2">Print</button>
    </div> 
</div>

@endsection        
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>