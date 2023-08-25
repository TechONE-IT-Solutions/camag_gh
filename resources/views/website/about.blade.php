@extends('layouts/website')


@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header-about py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!--Organisational overview start-->
    <div class="container">
        <div class="row g-0 justify-content-center mt-5">
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <img src="{{asset('CAMAG/img/camag-about.png') }}" class="img-fluid about-image" alt="">
            </div>
            <div class="col-lg-7 col-sm-12 pt-lg-5 fadeIn" data-wow-delay="0.5s">
                <div class="rounded-top p-lg-5 mt-lg-5">
                    <h3 class="  mb-4">ORGANISATIONAL OVERVIEW</h3>
                    <div class="g-5 pt-2 mb-5">
                        <p class="">
                            Concerned Assembly Members Association of Ghana <b>(CAMAG)</b> have its membership
                            nationwide in all Metropolitan, Municipal and Districts Assemblies (MMDAs) in Ghana.It's an
                            Association of progressive minded Assembly Members who believe that the local governance
                            concepts must keep evolving to address the welfare needs of assemble members and make strong
                            the units within the decentralization process. CAMAG Membership is subjected to application.
                            One must be willing to join the association by applying as such.
                        </p> 
                    </div>
                </div>  
            </div>
        </div>
    </div>
    </div>

            <div class="container">
                <div class="row g-5 pt-2  my-5 text-center justify-content-center bg-light py-3">
                    <div class="col-md-6 px-sm-5 py-lg-4">
                        <h3 class=" m-3">OUR VISION</h3>
                        <p>Building a vibrant association that seek to promote the welfare needs and interest of Assembly
                            members and best practices in local governance and decentralization.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('CAMAG/img/Coat_of_arms_of_Ghana.png') }}" class="img-fluid about-image" alt="">
                    </div>
                </div>
                
                    <div class="row text-center justify-content-center py-4 my-5">
                        <div class="col-md-4">
                            <img src="{{asset('CAMAG/img/about-img-1.png') }}" class="img-fluid about-image" alt="">
                        </div>
                        <div class="col-sm-12 col-md-6 pt-5">
                            <h3 class=" m-3">OUR MISSION</h3>
                            <p><b>CAMAG</b> seek to promote good governance at the local level through exchanging of ideas,
                                inclusiveness, empowerment of members, lobbying and advocacy for implementation of
                                policies and provision of conducive platform and environment for improved performance of
                                Local Governances in Ghana.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
<!--Organisational overview-->

<!--Principal Aim Section start-->           
<div class="container">
<div class="row justify-content-center ">
<div class="col-lg-10 bg-primary text-white border rounded mt-4 py-5 px-lg-5">
<h3 class="text-white text-center pb-3">PRINCIPAL AIMS & OBJECTIVES</h3>
<ul class="lh-2 fs-lg-5">
    <li class="mx-lg-5 my-lg-3">To foster close relationship among all Honorable members and other bodies and agencies both
        National and International with identical objectives for the promotion of effective and efficient
        local governance.
    </li>
    <li class="mx-lg-5 my-lg-3">Provide a platform for deliberation and exchange of ideas, experience and information on matters 
        of mutual concern related to local governance and decentralization.</li>
    <li class="mx-lg-5 my-lg-3">To help promote education and fight against illiteracy and ignorance on the part of citizens of the 
        country as a major step towards the achievement of a total emancipation of the people.</li>
    <li class="mx-lg-5 my-lg-3">To help Promote the development of Local government administration and decentralization in 
        Ghana through Advocacy and Lobbying.
        </li>
    <li class="mx-lg-5 my-lg-3">To help promote the development and prosperity of the country through identifying potentials in 
        our localities and the organization of voluntary and other social services .
        </li>
</ul>
</div>
</div>
</div>
<!-- Principal Aim section end -->


@endsection