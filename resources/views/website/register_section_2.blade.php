@extends('layouts/website')


@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Register</h1>
        <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Register</li>
                </ol>
            </nav>
    </div>
</div>
<!-- Page Header End -->

<!--Registration form start-->
<div class="container ">
    <div class="row justify-content-center container">
        <div class="col-md-9">
            
             <form class="row g-3 needs-validation shadow-lg rounded" novalidate>
                <div class="h3 fw-light text-center  my-3">Please Fill in The Form To Register</div>
                        <div class="col-md-4">
                          <label for="passportPicture" class="form-label">Passport Picture</label>
                          <input type="file" class="form-control" id="passportPicture" required>
                          <div class="invalid-feedback">
                            Insert Your Passport Picture
                          </div>
                        </div>
                        <div class="form-floating col-md-12">
                            <input type="text" class="form-control" id="name" required>
                            <label for="name" class="form-label"> Name</label>
                            <div class="invalid-feedback">
                              Enter your Name!
                            </div>
                        </div>
        
                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="hometown" required>
                            <label for="hometown" class="form-label">Hometown</label>
                          <div class="invalid-feedback">
                            Provide a valid town!
                          </div>
                        </div>
        
                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="placeofbirth"  required>
                            <label for="placeofbirth" class="form-label">Place Of Birth</label>
                            <div class="invalid-feedback">
                              Enter your Place of Birth!
                            </div>
                        </div>
                        <div class="form-floating col-md-7">
                            <input type="date" class="form-control" id="dateofbirth" required>
                            <label for="dateofbirth" class="form-label">Date Of Birth</label>
                            <div class="invalid-feedback">
                                Enter your Date of Birth!
                            </div>
                        </div>
        
                        <div class="col-md-5">
                            <label for="sexRadioOptions">Sex:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexRadioOptions" id="sexRadio1" value="Male">
                                <label class="form-check-label" for="sexRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexRadioOptions" id="sexRadio2" value="Female" required>
                                <label class="form-check-label" for="sexRadio2">Female</label>
                            </div>
                            <div class="invalid-feedback">
                                Please select your sex.
                            </div>
                        </div>
        
                          
                        <div class="form-floating col-12">
                            <input type="text" class="form-control" id="electoralArea" required>
                            <label for="electoralArea" class="form-label">Electoral Area</label>
                            <div class="invalid-feedback">
                              Please provide a valid Electoral Area.
                            </div>
                          </div>
                         
        
                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="district" required>
                            <label for="district" class="form-label">District</label>
                          <div class="invalid-feedback">
                            Please provide a valid District.
                          </div>
                        </div>
        
                        <div class="form-floating col-md-6">
                            <select class="form-select" id="region" required>
                                <option selected disabled value="">Region</option>
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
        
                        <div class="form-floating col-12">
                            <input type="text" class="form-control" id="validationCustom05" required>
                            <label for="validationCustom05" class="form-label">Nationality</label>
                          <div class="invalid-feedback">
                            Please provide your Nationality.
                          </div>
                        </div>
        
                        <div class="form-floating col-md-6">
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <label for="validationCustom02" class="form-label">Residential Address</label>
                            <div class="invalid-feedback">
                              Please enter your Residential Address!
                            </div>
                          </div>
        
                          <div class="form-floating col-md-6">
                              <input type="text" class="form-control" id="validationCustom02" required>
                              <label for="validationCustom02" class="form-label">Digital Address</label>
                            <div class="invalid-feedback">
                              Please provide your valid Digital Address!
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <label for="">Marital Status:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maritalRadioOptions" id="maritalRadio1" value="Single" required>
                                <label class="form-check-label" for="maritalRadio1">Single</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maritalRadioOptions" id="sexRadio2" value="Married">
                                <label class="form-check-label" for="maritalRadio2">Married</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="maritalRadioOptions" id="maritalRadio3" value="Divorced">
                                <label class="form-check-label" for="maritalRadio3">Divorced</label>
                            </div>
                        </div>
        
        
                            <div class="form-floating col-12">
                                <input type="tel" class="form-control" id="validationCustom02" required>
                                <label for="validationCustom02" class="form-label">Telephone Number</label>
                                <div class="invalid-feedback">
                                  Provide your Telephone number!
                                </div>
                              </div>
        
                              <div class="form-floating col-12">
                                  <input type="email" class="form-control" id="validationCustom02" required>
                                  <label for="validationCustom02" class="form-label">Email Address</label>
                                <div class="invalid-feedback">
                                  Please provide your Email Address!
                                </div>
                              </div>
        
                              <div>
                                <label for="">Educational Level:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eduLevel1" value="None" required>
                                        <label class="form-check-label" for="eduLevel1">None</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eduLevel2" value="J.H.S/M.S.L.C">
                                        <label class="form-check-label" for="eduLevel2">J.H.S/M.S.L.C</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eduLevel3" value="S.H.S">
                                        <label class="form-check-label" for="eduLevel3">S.H.S</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="eduLevel4" value="Tertiary">
                                        <label class="form-check-label" for="eduLevel4">Tertiary</label>
                                      </div>
                                </div>

                                <div>
                                    <label for="">Type Of Membership:</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="membershipradio" id="assemblymember" value="None" required>
                                            <label class="form-check-label" for="assemblymember">Assembly Member</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="membershipradio" id="unitCommiteemember" value="unitCommiteemember">
                                            <label class="form-check-label" for="unitCommiteemember">Unit Commitee Member</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="membershipradio" id="associatemember" value="S.H.S">
                                            <label class="form-check-label" for="associatemember">Associate Member</label>
                                          </div>
                                        </div>
                                
                                    <p><b><i><u>IN CASE OF EMERGENCY</u></i></b></p>
                                    <div class="form-floating col-12">
                                        <input type="text" class="form-control" id="emergencyname" required>
                                        <label for="emergencyname" class="form-label">Name</label>
                                        <div class="invalid-feedback">
                                          Please provide a Name!
                                        </div>
                                      </div>
                                      <div class="form-floating col-md-6">
                                          <input type="text" class="form-control" id="emergencyrelation" required>
                                          <label for="emergencyrelation" class="form-label">Relation</label>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                      <div class="form-floating col-md-6">
                                          <input type="tel" class="form-control" id="emergencynumber" required>
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
                                                <input type="text" class="form-control" id="validationCustom02" required>
                                                <label for="validationCustom02" class="form-label">Name</label>
                                                <p>By typing your name you have signed.</p>
                                                <div class="invalid-feedback">
                                                  Please provide the Name!
                                                </div>
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


@endsection