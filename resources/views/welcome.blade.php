@extends('layouts.site')

@section('content')

    <!-- Header Start -->
    <div class="px-0 mb-5 container-fluid bg-primary px-md-5">
        <div class="px-3 row align-items-center">
            <div class="text-center col-lg-6 text-lg-left">
                <h4 class="mt-5 mb-4 text-white mt-lg-0">Welcome to...</h4>
                <h1 class="text-white display-3 font-weight-bold">Colegio De Las Navas</h1>
                <p class="mb-4 text-white">Where learning meets excellence — we nurture minds, shape character, and inspire a lifelong passion for knowledge.
      Join our vibrant community and be part of a legacy that values growth, discipline, and heart.</p>
                <a href="" class="px-5 py-3 mt-1 btn btn-secondary">Learn More</a>
            </div>
            <div class="text-center col-lg-6 text-lg-right">
                {{-- <img class="mt-5 img-fluid" src="/design/img/custom/showcase.png" alt=""> --}}
                <img class="mt-5 img-fluid" src="{{ url('assets/facilities/cdln-front.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="mb-5 rounded img-fluid mb-lg-0" src="{{ url('/assets/teachers/school1.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="pr-5 section-title"><span class="pr-2">Learn About Us</span></p>
                    <h1 class="mb-4">Our Principles/Philosophy</h1>
                    <p>Colegio De Las Navas is committed to the total development of man who shares in shaping human existence of becoming the best of what they are, deeply driven by strong determination for change through continuous learning.</p>
                    <div class="pt-2 pb-4 row">
                        <div class="col-6 col-md-4">
                            <img class="rounded img-fluid" src="/assets/teachers/school2.jpg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <h3 class="mb-4">Core Values</h3>
                            <ul class="m-0 list-inline">
                                <li class="py-2 border-top border-bottom"><i class="mr-3 fa fa-check text-primary"></i>Competence</li>
                                <li class="py-2 border-bottom"><i class="mr-3 fa fa-check text-primary"></i>Diversity</li>
                                <li class="py-2 border-bottom"><i class="mr-3 fa fa-check text-primary"></i>Life-Long Learning</li>
                                <li class="py-2 border-bottom"><i class="mr-3 fa fa-check text-primary"></i>Nobility.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="px-4 py-2 mt-2 btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facilities Start -->
    <div class="pt-5 container-fluid">
        <div class="container pb-3">
            <div class="row">
                <div class="pb-1 col-lg-6 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-047-target h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Mission</h4>
                            <p class="m-0">CDLN instills a student-centered environment for transformational learning experience, producing graduates equipped with appropriate knowledge, skills, and attitudes, responsive to the needs of a dynamically changing global society.</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1 col-lg-6 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-014-vision h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Vision</h4>
                            <p class="m-0">By 2030, CDLN is a nationally recognized premier community college in the Visayas Region for higher and advance professional education, technical vocational, and training and development.</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="pb-1 col-lg-4 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-030-crayons h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Arts and Crafts</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1 col-lg-4 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-017-toy-car h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Safe Transportation</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1 col-lg-4 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-025-sandwich h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Healthy food</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="pb-1 col-lg-4 col-md-6">
                    <div class="mb-4 rounded shadow-sm d-flex bg-light border-top" style="padding: 30px;">
                        <i class="mb-3 flaticon-047-backpack h1 font-weight-normal text-primary"></i>
                        <div class="pl-4">
                            <h4>Educational Tour</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Facilities Start -->

    <!-- Registration Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="mb-5 col-lg-7 mb-lg-0">
                    <p class="pr-5 section-title"><span class="pr-2">Objectives</span></p>
                    <h1 class="mb-4">Our Objectives</h1>
                    <ul class="m-0 list-inline">
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Provide quality instruction by tapping qualified, competent, and dedicated school personnel utilizing the latest technology and continuously myrading facilities, and manifesting proactive attitude towards at work.</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Develop students with outstanding achievements and produce graduates with excellent performance in the related professional licensure   examinations and or in their chosen field. </li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Institutionalize a dynamic research program as an aid to effective classroom instruction as well as for the sustainable development of the Municipality of Las Navas and its partner local government units.</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Establish and maintain linkage with conumunity-based or people's organizations for partnership undertakings in the implementation of socio-economic development project, programs and activities.</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Coordinate with other local colleges and universitics as well as other institutions for collaboration, cooperation, complementation and convergence necessary for the advancement of Colegio De Las Navas as well as the Municipulity of Las Navas and its partner local government units.</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Initiate and facilitate in providing training and development to the officials and employees as well as leaders and constituents of the Municipality of Las Navas and its partner local government wits.</li>
                    </ul>
                    {{-- <a href="" class="px-4 py-2 mt-4 btn btn-primary">Book Now</a> --}}
                </div>
                <div class="col-lg-5">
                    <div class="border-0 card">
                        <p class="pr-5 section-title"><span class="pr-2">Goal</span></p>
                        <h1 class="mb-4">Our Goal</h1>
                        <ul class="m-0 list-inline">
                            <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Implement a curriculum as frontiers of knowledge and inculcate ethics and values.</li>
                            <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Tap competent and committed professionals to ensure quality education.</li>
                            <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Continue upgrading teaching and non-teaching personnel through education, training and seminu's.</li>
                            <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Caver to the demands of the students in the attainment of quality education by providing instructions thu are current in content and adopting the state of the art in teaching delivery. 5) Adopt the latest technology and continuous upgrading of facilities; and</li>
                            <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Offer programs relevant to the needs of the community towards economic upliftment. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    {{-- <!-- Registration Start -->
    <div class="py-5 container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="mb-5 col-lg-7 mb-lg-0">
                    <p class="pr-5 section-title"><span class="pr-2">Book A Seat</span></p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="m-0 list-inline">
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="mr-3 fa fa-check text-success"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                    <a href="" class="px-4 py-2 mt-4 btn btn-primary">Book Now</a>
                </div>
                <div class="col-lg-5">
                    <div class="border-0 card">
                        <div class="p-4 text-center card-header bg-secondary">
                            <h1 class="m-0 text-white">Book A Seat</h1>
                        </div>
                        <div class="p-5 card-body rounded-bottom bg-primary">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="p-4 border-0 form-control" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="p-4 border-0 form-control" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="px-4 border-0 custom-select" style="height: 47px;">
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 1</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="py-3 border-0 btn btn-secondary btn-block" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End --> --}}


    {{-- <!-- Class Start -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="pb-2 text-center">
                <p class="px-5 section-title"><span class="px-2">Popular Classes</span></p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
                <div class="mb-5 col-lg-4">
                    <div class="pb-2 border-0 shadow-sm card bg-light">
                        <img class="mb-2 card-img-top" src="/design/img/class-1.jpg" alt="">
                        <div class="text-center card-body">
                            <h4 class="card-title">Drawing Class</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="px-5 py-4 bg-transparent card-footer">
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Age of Kids</strong></div>
                                <div class="py-1 col-6">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Total Seats</strong></div>
                                <div class="py-1 col-6">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Class Time</strong></div>
                                <div class="py-1 col-6">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="py-1 text-right col-6 border-right"><strong>Tution Fee</strong></div>
                                <div class="py-1 col-6">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="px-4 mx-auto mb-4 btn btn-primary">Join Now</a>
                    </div>
                </div>
                <div class="mb-5 col-lg-4">
                    <div class="pb-2 border-0 shadow-sm card bg-light">
                        <img class="mb-2 card-img-top" src="/design/img/class-2.jpg" alt="">
                        <div class="text-center card-body">
                            <h4 class="card-title">Language Learning</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="px-5 py-4 bg-transparent card-footer">
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Age of Kids</strong></div>
                                <div class="py-1 col-6">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Total Seats</strong></div>
                                <div class="py-1 col-6">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Class Time</strong></div>
                                <div class="py-1 col-6">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="py-1 text-right col-6 border-right"><strong>Tution Fee</strong></div>
                                <div class="py-1 col-6">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="px-4 mx-auto mb-4 btn btn-primary">Join Now</a>
                    </div>
                </div>
                <div class="mb-5 col-lg-4">
                    <div class="pb-2 border-0 shadow-sm card bg-light">
                        <img class="mb-2 card-img-top" src="/design/img/class-3.jpg" alt="">
                        <div class="text-center card-body">
                            <h4 class="card-title">Basic Science</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="px-5 py-4 bg-transparent card-footer">
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Age of Kids</strong></div>
                                <div class="py-1 col-6">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Total Seats</strong></div>
                                <div class="py-1 col-6">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="py-1 text-right col-6 border-right"><strong>Class Time</strong></div>
                                <div class="py-1 col-6">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="py-1 text-right col-6 border-right"><strong>Tution Fee</strong></div>
                                <div class="py-1 col-6">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="px-4 mx-auto mb-4 btn btn-primary">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End --> --}}





    {{-- <!-- Team Start -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="pb-2 text-center">
                <p class="px-5 section-title"><span class="px-2">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="mb-5 text-center col-md-6 col-lg-3 team">
                    <div class="mb-4 overflow-hidden position-relative" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="/design/img/team-1.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="px-0 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="mb-5 text-center col-md-6 col-lg-3 team">
                    <div class="mb-4 overflow-hidden position-relative" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="/design/img/team-2.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="px-0 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="mb-5 text-center col-md-6 col-lg-3 team">
                    <div class="mb-4 overflow-hidden position-relative" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="/design/img/team-3.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="px-0 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="mb-5 text-center col-md-6 col-lg-3 team">
                    <div class="mb-4 overflow-hidden position-relative" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="/design/img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="px-0 mr-2 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="px-0 text-center btn btn-outline-light" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}

    <!-- Testimonial Start -->
    <div class="py-5 container-fluid">
        <div class="container p-0">
            <div>
                @livewire('model-search')
            </div>
            <div class="pb-2 text-center">
                <p class="px-5 section-title"><span class="px-2">Announcements</span></p>
                <h1 class="mb-4">Our Announcements</h1>
            </div>
            @forelse (App\Models\Departments::all() as $department)
                <h4 class="mb-4 mt-5">{{ $department->name }} Announcements</h4>
                <div class="owl-carousel testimonial-carousel">
                    @forelse (App\Models\Announcements::where('status', 'published')->where('departments_id', $department->id)->get() as $announcement)
                        <div class="px-3 testimonial-item">
                            <div class="p-4 mb-4 rounded shadow-sm bg-light">

                                <b>Posted: {{ $announcement->created_at->diffForHumans() }}</b> <br>
                                @php
                                    $filename = $announcement->attachment_path; // Adjust to your model attribute
                                    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                                    $fileUrl = asset('storage/announcementsOtherFiles/' . $filename); // adjust path
                                @endphp
                                <h3 class="mr-3 fas fa-quote-left text-primary"> {{ $announcement->title }}</h3> <br>
                                {{ Smark\Smark\Stringer::truncateString($announcement->content, 150) }}
                            </div>
                            <div class="d-flex align-items-center">
                                @php
                                    $user = $announcement->users;
                                    $nameParts = explode(' ', trim($user->name));
                                    $initials = '';
                                    if (count($nameParts) >= 2) {
                                        $initials = strtoupper(substr($nameParts[0], 0, 1) . substr(end($nameParts), 0, 1));
                                    } elseif (count($nameParts) === 1) {
                                        $initials = strtoupper(substr($nameParts[0], 0, 2));
                                    }
                                @endphp

                                @if(!empty($user->profile_photo_path))
                                    {{-- 🖼️ User has profile photo --}}
                                    <img class="border shadow-sm rounded-circle"
                                        src="{{ url('storage/'.$user->profile_photo_path) }}"
                                        style="width: 70px; height: 70px; object-fit: cover;"
                                        alt="{{ $user->name }}">
                                @else
                                    {{-- 🔤 Display initials if no photo --}}
                                    <div class="text-white shadow-sm rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                        style="width: 70px; height: 70px; font-size: 24px; font-weight: bold;">
                                        {{ $initials }}
                                    </div>
                                @endif

                                <div class="pl-3">
                                    <h5 class="mb-0">{{ $user->name }}</h5>
                                    <i class="text-muted">{{ ucfirst($user->role) }}</i>
                                </div>
                            </div>
                            <a href="{{ url('/announcement-details/'.$announcement->id) }}" class="px-4 py-2 mt-4 btn btn-primary">View Details</a>
                        </div>
                    @empty
                        No Accounements...
                    @endforelse
                </div>
            @empty

            @endforelse
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Testimonial Start -->
    <div class="py-5 container-fluid">
        <div class="container p-0">
            <div class="pb-2 text-center">
                <p class="px-5 section-title"><span class="px-2">Events</span></p>
                <h1 class="mb-4">Our Events</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @forelse (App\Models\Events::all() as $event)
                    <div class="px-3 testimonial-item">
                        <div class="p-4 mb-4 rounded shadow-sm bg-light">
                            <b>Posted: {{ $event->created_at->diffForHumans() }}</b> <br>
                            <h3 class="mr-3 fas fa-quote-left text-primary"> {{ $event->title }}</h3>
                            {{ Smark\Smark\Stringer::truncateString($event->description, 50) }}
                        </div>
                        <div class="d-flex align-items-center">
                            @php
                                $user = $event->users;
                                $nameParts = explode(' ', trim($user->name));
                                $initials = '';
                                if (count($nameParts) >= 2) {
                                    $initials = strtoupper(substr($nameParts[0], 0, 1) . substr(end($nameParts), 0, 1));
                                } elseif (count($nameParts) === 1) {
                                    $initials = strtoupper(substr($nameParts[0], 0, 2));
                                }
                            @endphp

                            @if(!empty($user->profile_photo_path))
                                {{-- 🖼️ User has profile photo --}}
                                <img class="border shadow-sm rounded-circle"
                                    src="{{ url('storage/'.$user->profile_photo_path) }}"
                                    style="width: 70px; height: 70px; object-fit: cover;"
                                    alt="{{ $user->name }}">
                            @else
                                {{-- 🔤 Display initials if no photo --}}
                                <div class="text-white shadow-sm rounded-circle bg-primary d-flex justify-content-center align-items-center"
                                    style="width: 70px; height: 70px; font-size: 24px; font-weight: bold;">
                                    {{ $initials }}
                                </div>
                            @endif

                            <div class="pl-3">
                                <h5 class="mb-0">{{ $user->name }}</h5>
                                <i class="text-muted">{{ ucfirst($user->role) }}</i>
                            </div>
                        </div>
                        <a href="{{ url('/event-details/'.$event->id) }}" class="px-4 py-2 mt-4 btn btn-primary">View Details</a>
                    </div>
                @empty
                    No Accounements...
                @endforelse
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="pt-5 container-fluid">
        <div class="container">
            <div class="pb-2 text-center">
                <p class="px-5 section-title"><span class="px-2">Latest Blog</span></p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="pb-3 row">
                <div class="mb-4 col-lg-4">
                    <div class="mb-2 border-0 shadow-sm card">
                        <img class="mb-2 card-img-top" src="/design/img/blog-1.jpg" alt="">
                        <div class="p-4 text-center card-body bg-light">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="mb-3 d-flex justify-content-center">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="px-4 mx-auto my-2 btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-lg-4">
                    <div class="mb-2 border-0 shadow-sm card">
                        <img class="mb-2 card-img-top" src="/design/img/blog-2.jpg" alt="">
                        <div class="p-4 text-center card-body bg-light">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="mb-3 d-flex justify-content-center">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="px-4 mx-auto my-2 btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="mb-4 col-lg-4">
                    <div class="mb-2 border-0 shadow-sm card">
                        <img class="mb-2 card-img-top" src="/design/img/blog-3.jpg" alt="">
                        <div class="p-4 text-center card-body bg-light">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="mb-3 d-flex justify-content-center">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="px-4 mx-auto my-2 btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
