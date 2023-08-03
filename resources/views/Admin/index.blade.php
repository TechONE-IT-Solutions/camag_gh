@extends('layouts/Admin')


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    Hello World!
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    Hello World!
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    Hello World!
                </div>
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Member In Every Region</h5>

              <!-- Polar Area Chart -->
              <canvas id="membershipGraph" style="max-height: 800px;"></canvas>
              <script>
                
              </script>
              <!-- End Polar Area Chart -->

            </div>
          </div>
        </div>
</div>
</div>

@endsection