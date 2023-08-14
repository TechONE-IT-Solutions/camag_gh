@extends('layouts/Admin')


@section('content')
<div class="container">
    <div class="row">

    @foreach ($counts as $count)
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <h2 style="font-size:40px; padding-top:25px" class="text-success text-center">{{ $count->total }}</h2>
                    @php
                            $type = $count->type_of_membership
                    @endphp

                    @if($type === 'AssemblyMember')
                        <p class=" text-center">Total Assembly Members</p>
                    @elseif($type === 'UnitCommiteeMember')
                        <p class=" text-center">Total Unit Commitee Members</p>
                    @elseif($type === 'AssociateMember')
                        <p class=" text-center">Total Associate Members</p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach


    </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Members In Every Region</h5>
              <!-- Polar Area Chart -->
              <!-- <canvas id="membershipGraph" style="max-height: 800px;"></canvas> -->
              <canvas id="polar-area-chart" style="max-height: 800px;"></canvas> 
            </div>
          </div>
        </div>

       

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gender Statistics</h5>
              <!-- Polar Area Chart -->
              <canvas id="gender-chart" style="width: 80%; margin: auto;"></canvas>
              <script>
              </script>
              <!-- End Polar Area Chart -->
        
            </div>
          </div>
        </div>
        
       <!--  <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title">Age Statistics</h5>
              <canvas id="age-chart" style="max-height: 800px;"></canvas>
              <script>
              </script>
            </div>
          </div>
        </div> -->

            


        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Marital Status Statistics</h5>
              <!-- Polar Area Chart -->
              <!-- <canvas id="membershipGraph" style="max-height: 800px;"></canvas> -->
              <canvas id="marital-chart" style="max-height: 800px;"></canvas>

              <script>
                
              </script>
              <!-- End Polar Area Chart -->
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Educational Level Statistics</h5>
              <!-- Polar Area Chart -->
              <!-- <canvas id="membershipGraph" style="max-height: 800px;"></canvas> -->
              <canvas id="education-chart" style="max-height: 800px;"></canvas>

              <script>
                
              </script>
              <!-- End Polar Area Chart -->
            </div>
          </div>
        </div>
        
</div>
</div>

    

<script>
        // Get data from the controller
        var membersData = @json($members);
        // Extract labels and data for Chart.js
        var labels = membersData.map(item => item.region);
        var data = membersData.map(item => item.total);
        // Create the chart
        var ctx = document.getElementById('polar-area-chart').getContext('2d');
        var polarBarChart = new Chart(ctx, {
        type: 'bar', // Change to 'bar' for polar bar chart
        data: {
            labels: labels,
            datasets: [{
                label: 'Region Statistics',
                data: data,
                backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgb(75, 192, 192)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 99, 132)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)',
                  'rgb(54, 162, 235)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 99, 132)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 205, 86)',
                    // Add more colors as needed
                ],
                borderColor: [
                  'rgb(255, 99, 132)',
                  'rgb(75, 192, 192)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 99, 132)',
                  'rgb(54, 162, 235)',
                  'rgb(255, 205, 86)',
                  'rgb(54, 162, 235)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 99, 132)',
                  'rgb(201, 203, 207)',
                  'rgb(255, 205, 86)',
                    // Add more colors as needed
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                r: {
                    beginAtZero: true
                }
            }
        }
    });
  
          var genderData = @json($genders);
          var g_labels = genderData.map(item => item.gender);
          var g_data = genderData.map(item => item.total);

          var gctx = document.getElementById('gender-chart').getContext('2d');
          var gpolarChart = new Chart(gctx, {
            type: 'polarArea', // Change to 'bar' for polar bar chart
            data: {
                labels: g_labels,
                datasets: [{
                    label: 'Gender Statistics',
                    data: g_data,
                    backgroundColor: [
                      'rgb(255, 205, 86)',
                      'rgb(54, 162, 235)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 99, 132)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                      'rgb(255, 99, 132)',
                      'rgb(75, 192, 192)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                        // Add more colors as needed
                    ],
                    borderColor: [
                      'rgb(255, 205, 86)',
                      'rgb(54, 162, 235)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 99, 132)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                      'rgb(255, 99, 132)',
                      'rgb(75, 192, 192)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                        // Add more colors as needed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    r: {
                        beginAtZero: true
                    }
                }
            }
          });

          var maritalData = @json($maritals);
          var m_labels = maritalData.map(item => item.marital_status);
          var m_data = maritalData.map(item => item.total);

          var mctx = document.getElementById('marital-chart').getContext('2d');
          var mpolarChart = new Chart(mctx, {
            type: 'doughnut', // Change to 'bar' for polar bar chart
            data: {
                labels: m_labels,
                datasets: [{
                    label: 'Gender Statistics',
                    data: m_data,
                    backgroundColor: [
                    
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 205, 86)',
                      'rgb(54, 162, 235)',
                      'rgb(201, 203, 207)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 99, 132)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                    
                        // Add more colors as needed
                    ],
                    borderColor: [
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                      'rgb(255, 205, 86)',
                      'rgb(54, 162, 235)',
                      'rgb(201, 203, 207)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 99, 132)',
                      'rgb(201, 203, 207)',
                      'rgb(255, 205, 86)',
                        // Add more colors as needed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
          });


        

          var educationData = @json($educations);
          var e_labels = educationData.map(item => item.educational_level);
          var e_data = educationData.map(item => item.total);

          var ectx = document.getElementById('education-chart').getContext('2d');
          var epolarChart = new Chart(ectx, {
              type: 'polarArea', // Use 'polarArea' for polar area chart
              data: {
                  labels: e_labels,
                  datasets: [{
                      label: 'Educational Level Statistics',
                      data: e_data,
                      backgroundColor: [
                          'rgb(255, 205, 86)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 99, 132)',
                          'rgb(201, 203, 207)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          // Add more colors as needed
                      ],
                      borderColor: [
                          'rgb(255, 255, 255)',
                          'rgb(255, 255, 255)',
                          'rgb(255, 255, 255)',
                          'rgb(255, 255, 255)',
                          'rgb(255, 255, 255)',
                          // Add more colors as needed
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      r: {
                          beginAtZero: true
                      }
                  }
              }
          });


    </script>

@endsection