@extends('layouts.site')

@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">About Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">About Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="/design/img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
                    <h1 class="mb-4">A Home of Excellence and Growth</h1>
                    <p>At Colegio De Las Navas, we believe that education goes beyond the classroom — it’s about shaping values, nurturing talents, and inspiring every learner to reach their fullest potential. With dedicated teachers, a supportive community, and a culture of excellence, we strive to create an environment where students grow in knowledge, confidence, and character. Here, every child is encouraged to dream big, learn with purpose, and lead with heart.</p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="/design/img/about-2.jpg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <h3 class="mb-4">Core Values</h3>
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Excellence</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Discipline</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Integrity</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facilities Start -->
    {{-- <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Play Ground</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Music and Dance</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Arts and Crafts</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Safe Transportation</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Healthy food</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Educational Tour</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facilities Start -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            {{-- <div class="row"> --}}
                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                    <img src="{{ url('assets/teachers.jpg') }}" alt="" style="width: 70%;">
                </div>
                {{-- <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="/design/img-fluid w-100" src="/design/img/team-1.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="/design/img-fluid w-100" src="/design/img/team-2.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="/design/img-fluid w-100" src="/design/img/team-3.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="/design/img-fluid w-100" src="/design/img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <!-- Team End -->

    <div class="container-fluid pt-5">
        <div class="container">

            <div class="text-center pb-4">
                <p class="section-title px-5"><span class="px-2">Our Facilities</span></p>
                <h1 class="mb-4">Meet Our Facilities</h1>
            </div>

            <!-- BUILDING 1 -->
            <div class="mb-5">
                <h3 class="mb-4">College of Business Administration</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/bsba_department /received_2133138864205948.jpeg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of Business Administration (Front)</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/bsba_department /office of business administration_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of Business Administration (Outside)</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/bsba_department /office of business administration_(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of Business Administration (Inside)</p>
                    </div>

                </div>
            </div>

            <!-- BUILDING 2 -->
            <div class="mb-5">
                <h3 class="mb-4">Criminology Department</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Forensic chemistry lab.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Forensic Chemistry Lab</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Forensic chemistry lab(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Forensic Chemistry Lab 2</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Forensic chemistry lab(2).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Forensic Chemistry Lab 3</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Forensic chemistry lab(3).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Forensic Chemistry Lab 4</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Forensic chemistry lab(3).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Forensic Chemistry Lab 4</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Laboratory_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Laboratory</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /Laboratory_(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Laboratory 2</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /moot court_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Moot Court</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /moot court_(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Moot Court 2</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /permanent crime scene_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Permanent Crime Scene</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/criminology_department /received_2052085372389848.jpeg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Permanent Crime Scene 2</p>
                    </div>

                </div>
            </div>

            <!-- BUILDING 3 -->
            <div class="mb-5">
                <h3 class="mb-4">Institutional Development And Services Office</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/institutional_development_and_services_office/received_2044491536111541.jpeg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Counseling Area</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/institutional_development_and_services_office/received_3942891742674749.jpeg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of The Student Affairs and Services</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/institutional_development_and_services_office/student publication office_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Student Publication Office (Inside)</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/institutional_development_and_services_office/student publication office.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Student Publication Office (Outside)</p>
                    </div>

                </div>
            </div>

            <!-- BUILDING 4 -->
            <div class="mb-5">
                <h3 class="mb-4">Office Of The Registrar</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/office_of_the_registrar/finance and accounting office_.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Finance And Accounting Office</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/office_of_the_registrar/finance and accounting office_(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Finance And Accounting Office 2</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/office_of_the_registrar/finance and accounting office_(2).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Finance And Accounting Office 3</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/office_of_the_registrar/office of registrar.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of The Registrar</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/office_of_the_registrar/office of registrar(1).jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Office Of The Registrar 2</p>
                    </div>

                </div>
            </div>

            <!-- BUILDING 5 -->
            <div class="mb-5">
                <h3 class="mb-4">Junior High School</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 7.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 7</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 8.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 8</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 9.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 9</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 10.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 10</p>
                    </div>

                </div>
            </div>

            <!-- BUILDING 6 -->
            <div class="mb-5">
                <h3 class="mb-4">Senior High School</h3>
                <div class="row">

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 11.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 11</p>
                    </div>

                    <div class="col-md-4 text-center mb-4">
                        <img src="{{ url('assets/facilities/highschool_&_senior_highschool_department /grade 12.jpg') }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2 font-weight-bold">Grade 12</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
