@extends('layouts/website')


@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Register</h1>
        <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('website-home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Register</li>
                </ol>
            </nav>
    </div>
</div>
<!-- Page Header End -->

<!--Registration form start-->
<div class="container ">
    <div class="row justify-content-center container">
        <div class=" col-sm-11 col-lg-9">

             <form class="row g-3 needs-validation shadow-lg rounded" method="POST" enctype="multipart/form-data" action="{{ route('send') }}" id="register_form" novalidate>
              @csrf
                <div class="h3 fw-light text-center  my-3">Please Fill in The Form To Register</div>
                {{-- first time --}}
                <div class="col-12">
                    <label for="">First time</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="firsttime" id="yes" value="yes" required>
                        <label class="form-check-label" for="maritalRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="firsttime" id="no" value="no">
                        <label class="form-check-label" for="maritalRadio2">No</label>
                    </div>
                </div>

                <div class="form-floating col-md-12 init_mem_id" id="init">
                    <input type="text" class="form-control" id="first_time" name="intiMemId">
                    <label for="name" class="form-label"> Your Initial Membership ID:</label>
                    <div class="invalid-feedback">
                      Membership ID
                    </div>
                  </div>
                <hr>
                  {{-- first time end --}}

                        <div class="form-floating col-md-12 mt-5">
                          <input type="text" class="form-control name_phone" id="name" required name="name" value="{{ old('name') }}">
                          <label for="name" class="form-label"> Name</label>
                          <div class="invalid-feedback">
                            Enter your Name!
                          </div>
                        </div>

                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="hometown" required name="hometown" value="{{ old('hometown') }}">
                            <label for="hometown" class="form-label">Hometown</label>
                          <div class="invalid-feedback">
                            Provide a valid town!
                          </div>
                        </div>

                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="placeofbirth"  required name="place_of_birth" value="{{ old('place_of_birth') }}">
                            <label for="placeofbirth" class="form-label">Place Of Birth</label>
                            <div class="invalid-feedback">
                              Enter your Place of Birth!
                            </div>
                        </div>

                        <div class="form-floating col-md-7">
                            <input type="date" class="form-control" id="dateofbirth" required name="date_of_birth" value="{{ old('date_of_birth') }}">
                            <label for="dateofbirth" class="form-label">Date Of Birth</label>
                            <div class="invalid-feedback">
                                Enter your Date of Birth!
                            </div>
                        </div>
                        <input type="hidden" name="transaction_reference" value="{{ session('transaction_reference') }}">

                        <div class="col-md-5 my-3">
                            <label for="sexRadioOptions">Sex:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sexRadio1" value="Male" required>
                                <label class="form-check-label" for="sexRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sexRadio2" value="Female">
                                <label class="form-check-label" for="sexRadio2">Female</label>
                            </div>
                            <div class="invalid-feedback">
                                Please select your sex.
                            </div>
                        </div>

                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control" id="electoralArea" required name="electoral_area" value="{{ old('electoral_area') }}">
                            <label for="electoralArea" class="form-label">Electoral Area</label>
                            <div class="invalid-feedback">
                              Please provide a valid Electoral Area.
                            </div>
                          </div>

                          <div class="col-md-4">
                          <label for="passportPicture" class="form-label">Passport Picture</label>
                          <input type="file" class="form-control" id="passportPicture" required name="image">
                          <div class="invalid-feedback">
                            Insert Your Passport Picture
                          </div>
                        </div>


                        <div class="image-preview mt-2 col-md-4">
                            <img id="imagePreview" src="#" alt="Preview" style="max-width:150">
                         </div>

                        <!-- <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="district" required name="district" value="{{ old('district') }}">
                            <label for="district" class="form-label">District</label>
                          <div class="invalid-feedback">
                            Please provide a valid District.
                          </div>
                        </div> -->

                        <div class="form-floating col-md-6">
                          <input type="text" class="form-control" id="nationality" required name="nationality" value="{{ old('nationality') }}">
                          <label for="nationality" class="form-label">Nationality</label>
                          <div class="invalid-feedback">
                            Please provide your Nationality.
                          </div>
                        </div>
                        
                        <div class="form-floating col-md-6">
                          <select class="form-select" name="region" id="region" required value="{{ old('region') }}">
                            <option class="text-danger"></option>
                            <option>Greater Accra Region</option>
                            <option>Central Region</option>
                            <option>Western North Region</option>
                            <option>Western Region</option>
                            <option>Ashanti Region</option>
                            <option>Bono East Region</option>
                            <option>Bono Region</option>
                            <option>Ahafo Region</option>
                            <option>Volta Region</option>
                            <option>Oti Region</option>
                            <option>Eastern Region</option>
                            <option>Northern Region</option>
                            <option>Upper East Region</option>
                            <option>Upper West Region</option>
                            <option>Savannah Region</option>
                            <option>North East Region</option>
                          </select>
                          <label for="region" class="form-label">Region</label>
                          <div class="invalid-feedback">
                            Please select Your Region.
                          </div>
                        </div>
                        
                        
                        
                          
                          <div class="form-floating col-md-12">
                            <select class="form-select" name="district" id="district" required value="{{ old('district') }}">
                            </select>
                            <label for="district" class="form-label">District</label>
                              <div class="invalid-feedback">
                                  Please select Your District.
                              </div>
                          </div>
                        
                          <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="residentialAddress" required name="residential_address" value="{{ old('residential_address') }}">
                            <label for="residentialAddress" class="form-label">Residential Address</label>
                            <div class="invalid-feedback">
                              Please enter your Residential Address!
                            </div>
                          </div>

                          <div class="form-floating col-md-6">
                              <input type="text" class="form-control" id="digitalAddress" required name="digital_address" value="{{ old('digital_address') }}">
                              <label for="digitalAddress" class="form-label">Digital Address</label>
                            <div class="invalid-feedback">
                              Please provide your valid Digital Address!
                            </div>
                          </div>

                          <div class="col-12">
                            <label for="">Marital Status:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ms" id="marital1" value="Single" required>
                                <label class="form-check-label" for="marital1">Single</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ms" id="sexRadio2" value="Married">
                                <label class="form-check-label" for="marital2">Married</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ms" id="marital3" value="Divorced">
                                <label class="form-check-label" for="marital3">Divorced</label>
                            </div>
                          </div>


                              <div class="form-floating col-12">
                                <input type="tel" class="form-control name_phone" id="phone" pattern="[0-9]{9,}" maxlength="15" required name="telephone_number"  value="{{ old('telephone_number') }}">
                                <label for="phone" class="form-label">Telephone Number</label>
                                <div class="invalid-feedback">
                                  Provide your Telephone number!
                                </div>
                              </div>

                              <div class="form-floating col-12">
                                  <input type="email" class="form-control" id="email" name="email_address" value="{{ old('email_address') }}">
                                  <label for="email" class="form-label">Email Address</label>
                                <div class="invalid-feedback">
                                  Please provide your Email Address!
                                </div>
                                @if($errors->has('email_address'))
                                <span style="color: red">{{ $errors->first('email_address') }}</span>
                                @endif
                              </div>

                                  <div>
                                      <label for="">Educational Level:</label>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edu" id="eduLevel1" value="None" required>
                                        <label class="form-check-label" for="eduLevel1">None</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edu" id="eduLevel2" value="J.H.S/M.S.L.C">
                                        <label class="form-check-label" for="eduLevel2">J.H.S/M.S.L.C</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edu" id="eduLevel3" value="S.H.S">
                                        <label class="form-check-label" for="eduLevel3">S.H.S</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="edu" id="eduLevel4" value="Tertiary">
                                        <label class="form-check-label" for="eduLevel4">Tertiary</label>
                                      </div>
                                  </div>

                                        <div>
                                          <label for="">Type Of Membership:</label>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pos" id="assemblymember" value="AssemblyMember" required>
                                            <label class="form-check-label" for="assemblymember">Assembly Member</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pos" id="unitCommiteemember" value="UnitCommiteeMember">
                                            <label class="form-check-label" for="unitCommiteemember">Unit Commitee Member</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pos" id="associatemember" value="AssociateMember">
                                            <label class="form-check-label" for="associatemember">Associate Member</label>
                                          </div>
                                        </div>

                                    <p><b><i><u>IN CASE OF EMERGENCY</u></i></b></p>
                                      <div class="form-floating col-12">
                                        <input type="text" class="form-control" id="emergencyname" required name="emergency_name" value="{{ old('emergency_name') }}">
                                        <label for="emergencyname" class="form-label">Name</label>
                                        <div class="invalid-feedback">
                                          Please provide a Name!
                                        </div>
                                      </div>
                                      <div class="form-floating col-md-6">
                                          <input type="text" class="form-control" id="emergencyrelation" required name="emergency_relation" value="{{ old('emergency_relation') }}">
                                          <label for="emergencyrelation" class="form-label">Relation</label>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                      <div class="form-floating col-md-6">
                                          <input type="tel" class="form-control" id="emergencynumber" pattern="[0-9]{9,}" maxlength="15" required name="emergency_contact" value="{{ old('emergency_contact') }}">
                                          <label for="emergencynumber" class="form-label">Contact</label>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>


                                   <span><b><u>DECLARATION</u></b></span>
                                    <P class="col-12">I DECLARE THAT, ALL INFORMATION CONTAINED IN THIS APPLICATION IS
                                          TRUE AND CORRECT AND I SHALL BEAR ANY CONSEQUENCY AS A RESULT OF
                                          ANY MISLEADING INFORMATION PROVIDED HEREIN.
                                          </P>


                                              <div class="form-floating col-md-6">
                                                    <input type="text" class="form-control" id="signature" required name="signature" value="{{ old('signature') }}">
                                                    <label for="signature" class="form-label">Name</label>
                                                    <p>By typing your name you have signed.</p>
                                                    <div class="invalid-feedback">
                                                    Please provide the Name!
                                                    </div>
                                                    <div id="div1"></div>
                                              </div>
                                    <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary m-3" type="submit">Submit form</button>
                            </div>

                        </div>
                      </form>
                    </div>
                    </div>
                </div>
    <!--Registration form end-->




    {{-- modal --}}


      {{-- modal end --}}
<script>
  // document.getElementById('region').addEventListener('input', function(){
  //   const selectElement = document.getElementById('region');
  //   const DistrictField = document.getElementById('district');
  //   const selectedOption = selectElement.options[selectElement.selectedIndex].value;
  //   const fetchEndPoint = `/get-districts/${selectedOption}`;
  //   fetch(fetchEndPoint).then(response => response.json()).then(data => {
  //         if (data.success) {
  //               // Clear existing options
  //               console.log(data);

  //               // Add new options based on the data
  //               for (let i = 0; i < data.length; i++) {
  //                   const option = document.createElement('option');
  //                   option.text = data[i];
  //                   DistrictField.add(option);
  //               }
  //           }
  //       });
  // });


  document.getElementById('region').addEventListener('change', function() {
    const selectElement = document.getElementById('region');
    const DistrictField = document.getElementById('district');
    const selectedOption = selectElement.value;
    const fetchEndPoint = `/get-districts/${selectedOption}`;
    
    fetch(fetchEndPoint)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Clear existing options
                DistrictField.innerHTML = '';
                console.log(data.Districts);

                // Add new options based on the data
                for (let i = 0; i < data.length; i++) {
                    const option = document.createElement('option');
                    option.text = data.Districts[i];
                    DistrictField.add(option);
                }
            }
        });
});

</script>
<script>
   window.addEventListener('load', function(){
        const transactionReference = "{{ session('transaction_reference') }}";
        const fetchUrl = `/get-data/${transactionReference}`;

        fetch(fetchUrl).then(response => response.json()).then(data => {
            if(data.success){
                document.getElementById('name').value = data.memberName;
                document.getElementById('phone').value = data.memberPhone;
            }
        });
   });
</script>
<script>
document.getElementById('register_form').addEventListener('submit', function(e){

    const name =  document.getElementById('name').value.toUpperCase();
    const sign = document.getElementById('signature').value.toUpperCase();
    const div1 = document.getElementById('div1');
    if(name !== sign){
        e.preventDefault();
        div1.innerHTML = `<p style='color:red;'>The name should match the name provided above</p>`;
        return false;

    }
})
</script>
<script>
    const yes = document.getElementById('yes');
    yes.addEventListener('click', function(){
        let init = document.getElementById('init');
        init.style.display = "none";
        init.required = false;
    })
    const no = document.getElementById('no');
    no.addEventListener('click', function(){
        let init = document.getElementById('init');
        init.style.display = "block";
        inti.required = true;
    });
</script>
<script>
    const firstTimeInput = document.getElementById('first_time');
    firstTimeInput.addEventListener('keyup', function(){
        const firstTimeInputValue = document.getElementById('first_time').value.toUpperCase();
        const fetchUrl = `/get-formData/${firstTimeInputValue}`;

        fetch(fetchUrl).then(response => response.json()).then(data => {
            if (data.success) {
                // Access the properties of the member object and set the values of HTML elements
                document.getElementById('name').value = data.member.name;
                document.getElementById('phone').value = data.member.telephone_number;
                document.getElementById('hometown').value = data.member.hometown;
                document.getElementById('placeofbirth').value = data.member.place_of_birth;
                document.getElementById('dateofbirth').value = data.member.date_of_birth;
                document.getElementById('electoralArea').value = data.member.electoral_area;
                document.getElementById('district').value = data.member.district;
                document.getElementById('region').value = data.member.region;
                document.getElementById('nationality').value = data.member.nationality;
                document.getElementById('residentialAddress').value = data.member.residential_address;
                document.getElementById('digitalAddress').value = data.member.digital_address;
                document.getElementById('email').value = data.member.email_address;
                document.getElementById('signature').value = data.member.name;
                document.getElementById('emergencyname').value = data.member.emergency_name;
                document.getElementById('emergencyrelation').value = data.member.emergency_relation;
                document.getElementById('emergencynumber').value = data.member.emergency_contact;
            } else {
                // Handle the case where the member is not found
                console.log('Member Not Found');
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    });

</script>

@endsection
