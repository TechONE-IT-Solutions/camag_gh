@extends('layouts/admin')


@section('content')

<div class="card">
  <div class="card-body">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{asset($details[0]['photo']) }}" alt="Profile" class="rounded-circle">
              <h2>{{ $details[0]['name'] }}</h2>
              <h3>{{ $details[0]['membership_id'] }}</h3>
              <h3>{{ $details[0]['type_of_membership'] }}</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body profile-button pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-dues">Dues Payment</button>
                </li>
              </ul>

              <div class="tab-content pt-2">
                
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <div class="brian">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Membership ID</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['membership_id'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label ">Full Name</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['name'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Date Of Birth</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['date_of_birth'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Membership Type</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['type_of_membership'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Phone</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['telephone_number'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Email</div>
                  <div class="col-lg-5 col-md-8  text-center">{{ $details[0]['email_address'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Residential Address</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['residential_address'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Hometown</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['hometown'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Place Of Birth</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['place_of_birth'] }}</div>
                </div>
                
                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Electoral Area</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['electoral_area'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">District</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['district'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Region</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['region'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Nationality</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['nationality'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Marital Status</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['marital_status'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Educational Level</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['educational_level'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Emergency Contact</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['emergency_name'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Emergency Contact Phone</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['emergency_contact'] }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-4 col-md-4 label">Emergency Contact Relation</div>
                  <div class="col-lg-5 col-md-8 text-center">{{ $details[0]['emergency_relation'] }}</div>
                </div>
              </div>

              <div>
                <button id="pdfButton" onclick="window.print()" class="btn btn-success">Download</button>
              </div>
            </div>

            <div class="tab-pane fade pt-3" id="profile-dues">
              <div id="table">
                <table id="profileDues" class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($payment_details as $payment_detail)
                    <tr>
                      <td>{{ \Carbon\Carbon::parse($payment_detail['created_at'])->format('Y-m-d') }}</td>
                      <td>{{ $payment_detail['amount'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div><!-- End Bordered Tabs -->

            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
</div>
</div>


@endsection