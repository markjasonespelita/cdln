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


<!-- Nav Tabs Start -->
<div class="container-fluid mb-4">
    <div class="container">
        <ul class="nav nav-pills justify-content-center flex-wrap" id="aboutTabs" role="tablist">
            <li class="nav-item m-1">
                <a class="nav-link" id="vmgp-tab" data-bs-toggle="pill" href="#vmgp" role="tab">Vision, Mission & Goals</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="history-tab" data-bs-toggle="pill" href="#history" role="tab">History & Charter</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="administration-tab" data-bs-toggle="pill" href="#administration" role="tab">Administration</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="teachers-tab" data-bs-toggle="pill" href="#teachers" role="tab">Our Teachers</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="facilities-tab" data-bs-toggle="pill" href="#facilities" role="tab">Facilities</a>
            </li>
        </ul>
    </div>
</div>
<!-- Nav Tabs End -->


<div class="container-fluid py-4">
    <div class="container">
        <div class="tab-content" id="aboutTabsContent">


            <!-- ===================== OVERVIEW ===================== -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="/design/img/about-1.jpg" alt="Colegio De Las Navas">
                    </div>
                    <div class="col-lg-7">
                        <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
                        <h1 class="mb-4">A Home of Excellence and Growth</h1>
                        <p>At Colegio De Las Navas, we believe that education goes beyond the classroom — it's about shaping values, nurturing talents, and inspiring every learner to reach their fullest potential. With dedicated teachers, a supportive community, and a culture of excellence, we strive to create an environment where students grow in knowledge, confidence, and character. Here, every child is encouraged to dream big, learn with purpose, and lead with heart.</p>
                        <div class="row pt-2 pb-4">
                            <div class="col-6 col-md-4">
                                <img class="img-fluid rounded" src="/design/img/about-2.jpg" alt="">
                            </div>
                            <div class="col-6 col-md-8">
                                <h3 class="mb-3">Core Values</h3>
                                <p class="text-muted mb-2"><strong>CDLN</strong> stands for:</p>
                                <ul class="list-unstyled m-0">
                                    <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i><strong>C</strong>ompetence</li>
                                    <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i><strong>D</strong>iversity</li>
                                    <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i><strong>L</strong>ife-Long Learning</li>
                                    <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i><strong>N</strong>obility</li>
                                </ul>
                            </div>
                        </div>
                        <div class="alert alert-primary">
                            <i class="fa fa-quote-left mr-2"></i><em>"Molding Holistic Individuals for a Brighter Tomorrow"</em>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="row mt-5 text-center">
                    <div class="col-6 col-md-3 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                            <h2 class="text-primary font-weight-bold">2005</h2>
                            <p class="mb-0 text-muted">Year Established</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                            <i class="fa fa-university h2 text-primary"></i>
                            <p class="mb-0 text-muted mt-1">Community College</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                            <i class="fa fa-map-marker-alt h2 text-primary"></i>
                            <p class="mb-0 text-muted mt-1">Las Navas, Northern Samar</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                            <i class="fa fa-graduation-cap h2 text-primary"></i>
                            <p class="mb-0 text-muted mt-1">CHED & DepEd Recognized</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================== VISION, MISSION & GOALS ===================== -->
            <div class="tab-pane fade" id="vmgp" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Who We Are</span></p>
                    <h1 class="mb-4">Vision, Mission & Goals</h1>
                </div>

                <!-- Vision -->
                <div class="bg-primary text-white rounded p-5 mb-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-eye fa-2x mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-weight-bold mb-3">Vision</h4>
                            <p class="mb-0" style="font-size: 1.1rem; line-height: 1.8;">By 2030, Colegio De Las Navas is a <strong>nationally recognized premier community college in the Visayas Region</strong> for higher and advance professional education, technical, vocational, and training and development.</p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="bg-light rounded p-5 mb-4 shadow-sm border-top border-primary">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-bullseye fa-2x text-primary mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-weight-bold text-primary mb-3">Mission</h4>
                            <p class="mb-0" style="font-size: 1.05rem; line-height: 1.8;">CDLN instills a <strong>student-centered environment</strong> for transformational learning experience, producing graduates equipped with appropriate knowledge, skills, and attitude, responsive to the needs of a dynamically changing global society.</p>
                        </div>
                    </div>
                </div>

                <!-- Philosophy -->
                <div class="bg-light rounded p-5 mb-4 shadow-sm border-top border-primary">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-lightbulb fa-2x text-primary mr-4 mt-1"></i>
                        <div>
                            <h4 class="font-weight-bold text-primary mb-3">Philosophy / Principles</h4>
                            <p class="mb-0" style="font-size: 1.05rem; line-height: 1.8;">Colegio De Las Navas is committed to the <strong>total development of man</strong> who shares in shaping human existence of becoming the best of what they are, deeply driven by strong determination for change through continuous learning.</p>
                        </div>
                    </div>
                </div>

                <!-- Institutional Goals -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-4"><i class="fa fa-flag mr-2"></i>Institutional Goals</h4>
                    <p class="text-muted mb-3">Colegio De Las Navas, inspired and guided by its philosophy, aims to:</p>
                    <ul class="list-unstyled">
                        <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Provide quality instruction by tapping qualified, competent and dedicated school personnel utilizing the latest technology and continuously upgrading facilities.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Develop students with outstanding achievements and produce graduates with excellent performance in related Professional Licensure Examinations and/or in their chosen field.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Institutionalize a dynamic research program as an aid to effective classroom instruction as well as for a sustainable development of the municipality of Las Navas and its partner local government units.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Establish and maintain linkages with community-based or people's organizations for partnership undertakings in the implementation of socioeconomic development projects, programs and activities.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Coordinate with other local colleges and universities for collaboration, cooperation, complementation and convergence necessary for the advancement of CDLN and the municipality of Las Navas.</li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-2"></i>Initiate and facilitate in providing training and development to officials and employees as well as leaders and constituents of the municipality of Las Navas and its partner local government units.</li>
                    </ul>
                </div>

                <!-- Goals -->
                <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-4"><i class="fa fa-tasks mr-2"></i>Goals</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Implement a curriculum as frontiers of knowledge and include ethics and values</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Tap competent and committed professionals to ensure quality education</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Continue upgrading teaching and non-teaching personnel through education, training and seminars</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Cater to the demands of students by providing current and state-of-the-art instruction delivery</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Adopt the latest technology and continuously upgrade facilities</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Offer programs relevant to the needs of the community towards economic upliftment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================== HISTORY & CHARTER ===================== -->
            <div class="tab-pane fade" id="history" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Our Roots</span></p>
                    <h1 class="mb-4">History & Charter</h1>
                </div>

                <!-- Timeline -->
                <div class="position-relative" style="border-left: 4px solid #007bff; margin-left: 20px; padding-left: 30px;">

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">January 10, 2005</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Ordinance No. 17 – 2005</h5>
                            <p class="text-muted mb-0">The Sangguniang Bayan of the Municipality of Las Navas, under Vice Mayor Myrna J. Lluz, passed Ordinance No. 17 – 2005 — <em>"An Ordinance Establishing the Community College in the Municipality of Las Navas, Province of Northern Samar to be known as Kolehiyo De Las Navas."</em></p>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">March 28, 2005</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Ordinance No. 18 – 2005 — Formal Charter</h5>
                            <p class="text-muted mb-0">The Sangguniang Bayan enacted Ordinance No. 18 – 2005 — <em>"An Ordinance Enacting the Herein Charter of the Community College in the Municipality of Las Navas, Northern Samar known as Colegio De Las Navas."</em></p>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">June 2005</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Operations Begin — S.Y. 2005–2006</h5>
                            <p class="text-muted mb-2">CDLN started its operation offering the following CHED-recognized degree programs:</p>
                            <ul class="text-muted pl-3 mb-0">
                                <li>Bachelor of Elementary Education</li>
                                <li>Bachelor of Secondary Education</li>
                                <li>Bachelor of Science in Criminology</li>
                                <li>Bachelor of Science in Computer Science</li>
                                <li>Bachelor of Science in Business Administration</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">S.Y. 2008–2009</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Laboratory High School Established</h5>
                            <p class="text-muted mb-0">CDLN offered secondary education — the Laboratory High School — serving as the pre-Teacher training ground for tertiary students taking up Teacher Education.</p>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">S.Y. 2016–2017</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Senior High School Launched</h5>
                            <p class="text-muted mb-0">CDLN offered Grade 11 of the Senior High School. All secondary education offerings — both Junior and Senior High School — are recognized by the Department of Education.</p>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">January 28, 2019</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">Charter Amended</h5>
                            <p class="text-muted mb-0">In consideration of the recommendations of the Office of Institutional Quality Assurance and Governance (OIQAG) of CHED following its verification visit on September 26, 2018, minor amendments were made to some provisions of the Revised Charter of CDLN by the Sangguniang Bayan under Vice Mayor Hon. Arlito Ambon Tan.</p>
                        </div>
                    </div>

                    <div class="mb-5 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #007bff; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #007bff;"></div>
                        <span class="badge badge-primary mb-2">December 29, 2022</span>
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold">CHED Memorandum Order No. 18, Series of 2022</h5>
                            <p class="text-muted mb-0">CHED issued policies, standards and guidelines on the Grant of Institutional Recognition as a Higher Education Institution to Local Universities and Colleges (LUCs), paving the way for further charter revisions.</p>
                        </div>
                    </div>

                    <div class="mb-2 position-relative">
                        <div class="position-absolute" style="left: -42px; top: 4px; width: 20px; height: 20px; background-color: #28a745; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 2px #28a745;"></div>
                        <span class="badge badge-success mb-2">2023</span>
                        <div class="bg-light rounded p-4 shadow-sm border-top border-success">
                            <h5 class="font-weight-bold">The 2023 Revised Charter of Colegio De Las Navas</h5>
                            <p class="text-muted mb-0">To further strengthen the community college and make it more competitive, responsive, relevant, and proactive to the needs of the ever-changing society comparable with the ASEAN and global community, a further amendment to the Charter was introduced — <strong>The 2023 Revised Charter of Colegio De Las Navas</strong>.</p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- ===================== ADMINISTRATION ===================== -->
            <div class="tab-pane fade" id="administration" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Leadership</span></p>
                    <h1 class="mb-4">Board of Trustees</h1>
                    <p class="col-md-8 mx-auto text-muted">Colegio De Las Navas is established, owned and operated by the Local Government Unit of Las Navas, Northern Samar. The Board of Trustees provides governance and strategic direction for the institution.</p>
                </div>

                <div class="row justify-content-center">

                    <!-- Chairman -->
                    <div class="col-12 mb-4">
                        <div class="bg-primary text-white rounded p-4 shadow-sm text-center">
                            <i class="fa fa-user-tie fa-3x mb-3"></i>
                            <h4 class="font-weight-bold mb-1">HON. ARLITO A. TAN</h4>
                            <p class="mb-0">Chairman, Board of Trustees / Municipal Mayor</p>
                        </div>
                    </div>

                    <!-- Other Members -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">HON. MINDA MERCADER-TAN</h5>
                            <p class="text-muted mb-0">Municipal Vice Mayor</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">HON. JERAZIL MERALH PAJUELAS-TILBE</h5>
                            <p class="text-muted mb-0">Committee Chair on Education of the Sangguniang Bayan</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">DOMINGO C. DIANITO</h5>
                            <p class="text-muted mb-0">Municipal Treasurer</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">NICK N. LUCERO</h5>
                            <p class="text-muted mb-0">Municipal Budget Officer</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">MA. OLIVIA E. OLCHONDRA, CPA</h5>
                            <p class="text-muted mb-0">Municipal Accountant</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">GREGORIO M. ORSOLINO, DM-HRM</h5>
                            <p class="text-muted mb-0">College Administration</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">NOELDA P. CAMARINES</h5>
                            <p class="text-muted mb-0">President, Faculty and Employees Association</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary text-center h-100">
                            <i class="fa fa-user fa-2x text-primary mb-3"></i>
                            <h5 class="font-weight-bold mb-1">LEOMAR J. ORSOLINO</h5>
                            <p class="text-muted mb-0">President, Alumni Association</p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- ===================== OUR TEACHERS ===================== -->
            <div class="tab-pane fade" id="teachers" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                    <h1 class="mb-4">Meet Our Teachers</h1>
                    <p class="col-md-8 mx-auto text-muted">Our dedicated faculty members are committed to providing quality education and shaping the next generation of leaders.</p>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                    <img src="{{ url('assets/teachers.jpg') }}" alt="Our Teachers" style="width: 70%;" class="img-fluid rounded shadow-sm">
                </div>
            </div>


            <!-- ===================== FACILITIES ===================== -->
            <div class="tab-pane fade" id="facilities" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Our Facilities</span></p>
                    <h1 class="mb-4">Campus Facilities</h1>
                </div>

                <!-- BUILDING 1 -->
                <div class="mb-5">
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-building mr-2"></i>College of Business Administration</h3>
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
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-building mr-2"></i>Criminology Department</h3>
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
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-building mr-2"></i>Institutional Development And Services Office</h3>
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
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-building mr-2"></i>Office Of The Registrar</h3>
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
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-school mr-2"></i>Junior High School</h3>
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
                    <h3 class="mb-4 text-primary border-bottom pb-2"><i class="fa fa-school mr-2"></i>Senior High School</h3>
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
            <!-- Facilities End -->


        </div><!-- end tab-content -->
    </div>
</div>

@endsection
