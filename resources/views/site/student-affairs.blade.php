@extends('layouts.site')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Student Affairs</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Student Affairs</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Nav Tabs Start -->
<div class="container-fluid mb-4">
    <div class="container">
        <ul class="nav nav-pills justify-content-center flex-wrap" id="studentAffairsTabs" role="tablist">
            <li class="nav-item m-1">
                <a class="nav-link active" id="orgs-tab" data-toggle="pill" href="#orgs" role="tab">Student Organizations</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="services-tab" data-toggle="pill" href="#services" role="tab">Student Services</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="rights-tab" data-toggle="pill" href="#rights" role="tab">Rights & Responsibilities</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="scholarships-tab" data-toggle="pill" href="#scholarships" role="tab">Scholarships & Grants</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="cocurricular-tab" data-toggle="pill" href="#cocurricular" role="tab">Co-Curricular Activities</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" id="discipline-tab" data-toggle="pill" href="#discipline" role="tab">Conduct & Discipline</a>
            </li>
        </ul>
    </div>
</div>
<!-- Nav Tabs End -->


<div class="container-fluid py-4">
    <div class="container">
        <div class="tab-content" id="studentAffairsTabsContent">


            <!-- ===================== STUDENT ORGANIZATIONS ===================== -->
            <div class="tab-pane fade show active" id="orgs" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Campus Life</span></p>
                    <h1 class="mb-4">Student Organizations</h1>
                    <p class="col-md-8 mx-auto text-muted">Colegio De Las Navas recognizes the importance of providing a venue for developing responsible and productive student leaders who will eventually become leaders in their own chosen profession.</p>
                </div>

                <!-- Accreditation -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-certificate mr-2"></i>A. Accreditation of Student Body Organizations (SBO)</h4>
                    <p>Student organizations must submit themselves for recognition through the CDLN–SSC and the OSA. A Certificate of Recognition is awarded upon full compliance. A minimum of <strong>10 to 15 members</strong> is required to apply for recognition.</p>
                    <h6 class="mt-3 mb-2 font-weight-bold">Requirements for Accreditation <small class="text-muted">(submitted in duplicate to CDLN–SSC):</small></h6>
                    <ul class="list-unstyled">
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Formal letter of application addressed to the OSAS Coordinator</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Accomplished application form</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Constitution and By-Laws of the organization</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>List of Officers with their respective position and curriculum vitae</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>List of members with year levels, birthdates, address, contact numbers and specimen signatures</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Action Plan for the school year (Proposed activities)</li>
                        <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Name of faculty adviser</li>
                    </ul>
                </div>

                <!-- Officer Requirements -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-user-tie mr-2"></i>B. Organization Officer Requirements</h4>
                    <p>Organization officers must comply with the following requirements, apart from those in their respective constitution and by-laws:</p>
                    <ul class="list-unstyled">
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Must be a <strong>regular student</strong></li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Must <strong>not</strong> have been under a disciplinary sanction</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Must maintain a general weighted average of <strong>2.5 or better</strong></li>
                        <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Must have been a resident for <strong>2 consecutive semesters</strong> prior to election</li>
                    </ul>
                </div>

                <!-- SSC -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-star mr-2"></i>C. The Supreme Student Council (SSC)</h4>
                    <p>The CDLN–SSC is the <strong>highest governing body</strong> of all bona fide CDLN students and the sole student organization representing the whole student body in the College Department. It promotes cooperation, collaboration and leadership among the various student groups.</p>
                    <p>A student council fee is collected from each student. Financial statements must be submitted to the OSAS at the end of every semester and published in the <em>Living Legacy</em>. Misuse of funds shall subject the erring student/s to disciplinary action.</p>
                </div>

                <!-- Extra-Curricular -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-calendar-alt mr-2"></i>D. Extra-Curricular Activities</h4>
                    <p>Extra-curricular activities or projects of recognized organizations involving the entire institution shall be subject to review and approval by the College Administrator upon the recommendation of the OSA Coordinator.</p>
                    <h6 class="mt-3 mb-2 font-weight-bold">Planning Activities:</h6>
                    <ol>
                        <li class="py-1">Plan activities with the organization adviser</li>
                        <li class="py-1">Clear the activity with the OSA, to be entered in the Activity Calendar</li>
                        <li class="py-1">Make reservations for the use of facilities and equipment a week before the activity</li>
                        <li class="py-1">Solicitation of prizes must be cleared through the College Administrator</li>
                    </ol>
                    <div class="alert alert-info mt-3 mb-0">
                        <i class="fa fa-info-circle mr-2"></i><strong>Fund Raising Projects:</strong> All fundraising projects must have prior approval of the College Administrator upon the recommendation of the OSAS Coordinator.
                    </div>
                </div>

                <!-- Student Publication -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-newspaper mr-2"></i>E. Student Publication — <em>Living Legacy</em></h4>
                    <p>The college's official student publication is the <strong>Living Legacy</strong>. An editorial examination is conducted annually to select members of the Editorial Staff. Publication fees are collected from students. The Editor-In-Chief and the Faculty Adviser are the joint signatories for the release of collected funds.</p>
                    <p class="mb-0">Financial statements must be submitted to the OSAS at the end of every semester and published in the Living Legacy.</p>
                </div>
            </div>


            <!-- ===================== STUDENT SERVICES ===================== -->
            <div class="tab-pane fade" id="services" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Support & Welfare</span></p>
                    <h1 class="mb-4">Student Services</h1>
                </div>

                <div class="row">
                    <!-- Info & Orientation -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-info-circle h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>I. Information, Orientation & Awareness Services</h5>
                                <p class="mb-0 text-muted">Informative activities and materials designed to facilitate student adjustment to life in higher education. Comprehensive orientation programs are held for new and continuing students. Information materials on the institution's vision, mission, goals, rules and regulations, and student programs are made accessible to all students.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Guidance -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-hands-helping h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>II. Guidance and Counseling</h5>
                                <p class="mb-2 text-muted">Aimed at helping every student utilize their fullest potential. Services include:</p>
                                <ul class="text-muted pl-3 mb-0">
                                    <li>Counseling (individual & group)</li>
                                    <li>Appraisal (psychological tests)</li>
                                    <li>Follow-up & monitoring</li>
                                    <li>Referral to specialists</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Food Services -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-utensils h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>III. Food Services</h5>
                                <p class="mb-0 text-muted">The CDLN Canteen serves safe, nutritious, low-cost snacks to the school populace. School supplies are also available.</p>
                                <span class="badge badge-primary mt-2">Open: Mon–Fri | 9:00 AM–11:00 AM &amp; 2:00 PM–6:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Health Services -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-heartbeat h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>IV. Health Services</h5>
                                <p class="mb-2 text-muted">The School Clinic provides primary health care services. Services include:</p>
                                <ul class="text-muted pl-3 mb-0">
                                    <li>Health assessment (height, weight, blood pressure)</li>
                                    <li>Prevention of communicable diseases</li>
                                    <li>Medical / Dental / Nursing Services</li>
                                    <li>Weekly check-up with School Physician</li>
                                    <li>Weekly Dental Services with School Dentist</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Safety & Security -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-shield-alt h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>V. Safety and Security Services</h5>
                                <p class="mb-0 text-muted">The College maintains a safe and secure environment with an organized disaster risk reduction and management team headed by the Department Chair of BS Criminology, with Civil Security Officers as members. The unit enforces rules and protects lives and property of the school community.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Housing -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-home h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>VI. Student Housing Services</h5>
                                <p class="mb-0 text-muted">The OSA maintains a list of reputable, safe and affordable boarding houses within the town proper to help students find comfortable living quarters conducive to learning. The OSA conducts visitation once every semester to all boarding houses to determine the safety and wellbeing of students.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Culture, Arts & Sports -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-paint-brush h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>VII. Culture, Arts & Sports Development</h5>
                                <p class="mb-0 text-muted">Manned by a MAPEH Coordinator, this office provides opportunities for students to develop and enhance their talents, abilities, and values for the promotion of national culture and multi-cultural heritage. The Culture and Arts Celebration is held in <strong>February</strong>. Annual sports activities including Intramurals are also facilitated.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social & Community -->
                    <div class="col-md-6 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4 h-100">
                            <i class="fa fa-users h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>VIII. Social and Community Involvement</h5>
                                <p class="mb-2 text-muted">The College actively participates in information and education campaigns on conservation and preservation of natural resources. Extension services include:</p>
                                <ul class="text-muted pl-3 mb-0">
                                    <li>Teacher Education Literacy Program</li>
                                    <li>Criminology – Barangay Judiciary Process</li>
                                    <li>Business Administration – Financial Literacy to Business Owners</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Library -->
                    <div class="col-md-12 mb-4">
                        <div class="d-flex bg-light shadow-sm border-top border-primary rounded p-4">
                            <i class="fa fa-book h2 text-primary mr-4 mt-1"></i>
                            <div>
                                <h5>IX. The Library</h5>
                                <p class="mb-0 text-muted">The library plays an indispensable role in accomplishing the aims of Colegio De Las Navas. It provides an avenue for students to expand or increase their knowledge. Students are under obligation to help preserve its materials, promote smooth social relationships, and maintain a library atmosphere conducive to study and research.</p>
                                <span class="badge badge-primary mt-2">Open: Mon–Fri | 8:00 AM–5:00 PM (excluding holidays)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================== RIGHTS & RESPONSIBILITIES ===================== -->
            <div class="tab-pane fade" id="rights" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Know Your Rights</span></p>
                    <h1 class="mb-4">Rights & Responsibilities of Students</h1>
                    <p class="col-md-8 mx-auto text-muted">As stated in Section 9, Chapter 2, Batas Pambansa Blg. 232, students shall enjoy the following rights, subject to limitations prescribed by law and regulations.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary h-100">
                            <h4 class="text-primary mb-4"><i class="fa fa-balance-scale mr-2"></i>I. Students' Rights</h4>
                            <ul class="list-unstyled">
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to receive quality education through competent instruction</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to freely choose their field of study up to graduation</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to school guidance and counselling services</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to access their own school records (kept confidential)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to official certificates, diplomas, and transcript of records within 30 days from request</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to publish a student newspaper and similar publications</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to free expression of opinions and suggestions</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check-circle text-primary mr-2"></i>Right to form, join and participate in recognized organizations and societies</li>
                                <li class="py-2"><i class="fa fa-check-circle text-primary mr-2"></i>Right to be free from involuntary contributions</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary h-100">
                            <h4 class="text-primary mb-4"><i class="fa fa-tasks mr-2"></i>II. Duties and Responsibilities of Students</h4>
                            <ul class="list-unstyled">
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Exert utmost effort in developing their potentialities for service to family and society</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Uphold academic integrity and abide by school rules and regulations</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Promote and maintain peace and tranquility of the school by observing rules of discipline</li>
                                <li class="py-2 border-bottom"><i class="fa fa-arrow-right text-primary mr-2"></i>Participate actively in civic affairs and the promotion of general welfare and community development</li>
                                <li class="py-2"><i class="fa fa-arrow-right text-primary mr-2"></i>Exercise rights responsibly with knowledge that they are answerable for any infringement of the rights of others</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================== SCHOLARSHIPS ===================== -->
            <div class="tab-pane fade" id="scholarships" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Financial Aid</span></p>
                    <h1 class="mb-4">Scholarships, Grants & Privileges</h1>
                    <p class="col-md-8 mx-auto text-muted">To help students sustain their education, the College offers in-school scholarships and grants and establishes linkages with sponsors and benefactors. As a general rule, a student may avail of only <strong>one scholarship</strong>.</p>
                </div>

                <div class="row">
                    <!-- Student Assistantship -->
                    <div class="col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary h-100">
                            <h5 class="text-primary mb-3"><i class="fa fa-graduation-cap mr-2"></i>1. Student Assistantship</h5>
                            <p class="text-muted">Free tuition and allowances are given to qualified Student Assistants who render services to their assigned offices for a duration of one semester/summer.</p>
                            <h6 class="font-weight-bold mt-3 mb-2">Requirements:</h6>
                            <ul class="text-muted pl-3 mb-0">
                                <li>At least 1 year residence at CDLN</li>
                                <li>GWA of at least 2.5, no INC, DROPPED, or failing marks</li>
                                <li>Honest, diligent, hard-working</li>
                                <li>Physically and mentally healthy</li>
                                <li>Good moral character</li>
                                <li>Endorsed by Barangay Captain and recommended by two instructors or adviser</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dean's Scholar -->
                    <div class="col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary h-100">
                            <h5 class="text-primary mb-3"><i class="fa fa-award mr-2"></i>2. Dean's Scholar</h5>
                            <p class="text-muted">Every end of each regular term, all Colleges or Programs shall recognize the exemplary academic achievements of students through a <strong>Dean's List</strong>.</p>
                            <h6 class="font-weight-bold mt-3 mb-2">Qualifications:</h6>
                            <ul class="text-muted pl-3 mb-0">
                                <li>No grade of "5.0", "INC", or "DRP"</li>
                                <li>Term Weighted Average (TWA) of <strong>1.75 or above</strong> with no grade lower than 2.0 in any academic subject</li>
                                <li>At least 21 academic units of course load (or not less than the regular curriculum load)</li>
                                <li>Must not have received any major disciplinary action/sanction</li>
                            </ul>
                            <div class="alert alert-success mt-3 mb-0 py-2 px-3">
                                <small><i class="fa fa-trophy mr-1"></i>A Certificate of Recognition shall be awarded to the student belonging to the Dean's List.</small>
                            </div>
                        </div>
                    </div>

                    <!-- External Grants -->
                    <div class="col-lg-4 mb-4">
                        <div class="bg-light rounded p-4 shadow-sm border-top border-primary h-100">
                            <h5 class="text-primary mb-3"><i class="fa fa-hand-holding-usd mr-2"></i>3. Grants Sponsored by Benefactors & Government</h5>
                            <p class="text-muted">All student grantees must comply with the admission and retention policies of the College.</p>
                            <h6 class="font-weight-bold mt-3 mb-2">Available Grants:</h6>
                            <ul class="text-muted pl-3 mb-2">
                                <li>Department of Social Welfare and Development (DSWD)</li>
                                <li>Iskolar ng Probinsya (Provincial Government)</li>
                                <li>Congressional Scholarship (CHED STUFAP)</li>
                                <li>Municipal Scholarship</li>
                            </ul>
                            <h6 class="font-weight-bold mt-3 mb-2">Applicants Must Submit:</h6>
                            <ul class="text-muted pl-3 mb-0">
                                <li>Application form</li>
                                <li>Certificate of Residency / Certificate of Indigency</li>
                                <li>Qualifying Examination</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Enrollment Policies -->
                <div class="mt-2">
                    <h4 class="mb-4 text-primary"><i class="fa fa-file-alt mr-2"></i>Enrollment Policies</h4>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="bg-light rounded p-4 shadow-sm border-top border-warning">
                                <h5 class="mb-3"><i class="fa fa-pencil-alt text-warning mr-2"></i>Correction of Names / Dates or Place of Birth</h5>
                                <p class="text-muted mb-0">A student whose record contains incorrect information must apply for a <strong>Request for Correction of Personal Information</strong> to the Office of the College Registrar.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="bg-light rounded p-4 shadow-sm border-top border-warning">
                                <h5 class="mb-3"><i class="fa fa-times-circle text-warning mr-2"></i>Cancellation of Enrollment</h5>
                                <p class="text-muted mb-2">Any student who wishes to discontinue their studies must notify the Office of the College Registrar in writing not later than the <strong>fourth week</strong> of the term.</p>
                                <ul class="text-muted pl-3 mb-0">
                                    <li><strong>1st week:</strong> 10% charge of total amount due</li>
                                    <li><strong>2nd week:</strong> 20% charge of total amount due</li>
                                    <li><strong>After 2nd week:</strong> Full school fees apply</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================== CO-CURRICULAR ACTIVITIES ===================== -->
            <div class="tab-pane fade" id="cocurricular" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Beyond the Classroom</span></p>
                    <h1 class="mb-4">Conduct of Co-Curricular Activities</h1>
                    <p class="col-md-8 mx-auto text-muted">Educational tours or fieldtrips are learning experiences outside the classroom. These trips supplement classroom learning and enrich students' experiences by exposing them to new situations.</p>
                </div>

                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-list-ul mr-2"></i>General Guidelines</h4>
                    <p class="text-muted">The following guidelines apply for off-campus or educational activities (invitations for competitions, seminars, forums, field study, retreats, recollections, youth camps and others):</p>
                    <ul class="list-unstyled">
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Educational tours outside of the province shall only be allowed if granted by the Commission on Higher Education or the Department of Education.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>The teacher in-charge prepares an activity plan including objectives, venue, time, cost, and chaperons. The plan is submitted to and duly signed by the Department Head, Coordinator of Student Affairs, and the College Administrator.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Upon approval, students are informed about the activity and what is expected of them.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Students request an extra-class permit form/waiver slip for guardians/parents to sign. <strong>Students without permit signed by parent/guardian will NOT be allowed to join.</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>The teacher-in-charge posts a copy of the approved activity plan and notices on bulletin boards.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i>The teacher-in-charge fills out a request form from the Accounting Office a week before the activity.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-2"></i>An evaluation form is accomplished by the participants after the activity.</li>
                    </ul>
                </div>
            </div>


            <!-- ===================== CONDUCT & DISCIPLINE ===================== -->
            <div class="tab-pane fade" id="discipline" role="tabpanel">
                <div class="text-center pb-4">
                    <p class="section-title px-5"><span class="px-2">Rules & Regulations</span></p>
                    <h1 class="mb-4">Student Conduct and Discipline</h1>
                </div>

                <!-- School Uniform -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-tshirt mr-2"></i>I. School Uniform</h4>
                    <p class="mb-0 text-muted">A school uniform is prescribed for all students and should be worn appropriately. Students must attend classes in the prescribed school uniform (bearing the CDLN Patch and course) every <strong>Monday, Tuesday, Thursday and Friday</strong>. Wednesday follows the provision for <strong>Type B uniform</strong>. A mimeographed sketch of the prescribed uniform may be obtained at the OSA.</p>
                </div>

                <!-- School ID -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-id-card mr-2"></i>II. School ID</h4>
                    <p class="mb-0 text-muted">School IDs must be worn at all times within the campus. Failure or refusal to present/wear the ID properly is considered a light offense subject to disciplinary sanctions.</p>
                </div>

                <!-- Use of School Facilities -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                    <h4 class="text-primary mb-3"><i class="fa fa-building mr-2"></i>III. Use of School Facilities</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Observe library and laboratory rules and regulations</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Conserve energy — turn off lights and electric fans when not in use</li>
                        <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>Keep the comfort rooms clean at all times</li>
                        <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>Keep the campus clean and orderly; observe proper waste disposal</li>
                    </ul>
                </div>

                <!-- Policies on Discipline -->
                <div class="mb-4">
                    <h4 class="text-primary mb-4"><i class="fa fa-gavel mr-2"></i>IV. Policies on Discipline</h4>

                    <!-- Offense Table -->
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-primary" style="background-color: #007bff; color: white;">
                                <tr>
                                    <th style="width: 40%;">Classification of Offense</th>
                                    <th style="width: 30%;">Examples</th>
                                    <th style="width: 30%;">Sanction</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-success">
                                    <td><strong>LIGHT OFFENSES</strong></td>
                                    <td>
                                        <ul class="pl-3 mb-0 small">
                                            <li>Failure/refusal to present/wear ID or uniform</li>
                                            <li>Littering</li>
                                            <li>Non-wearing of ID inside campus</li>
                                            <li>Entering class without permission</li>
                                            <li>Habitual improper wearing of uniform</li>
                                            <li>Boisterous/disruptive conversations</li>
                                            <li>Smoking inside school premises</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <span class="badge badge-success d-block mb-1">1st offense: Verbal warning with counseling</span>
                                        <span class="badge badge-warning d-block mb-1">2nd offense: Written notice of warning with counseling</span>
                                        <span class="badge badge-danger d-block">3rd offense: 30 hours community service</span>
                                        <small class="text-muted mt-1 d-block">4 violations in one semester = Major offense</small>
                                    </td>
                                </tr>
                                <tr class="table-warning">
                                    <td><strong>SERIOUS OFFENSES</strong></td>
                                    <td>
                                        <ul class="pl-3 mb-0 small">
                                            <li>Gambling within campus</li>
                                            <li>Cheating</li>
                                            <li>Using someone else's ID</li>
                                            <li>Vandalism</li>
                                            <li>Display/distribution of pornographic materials</li>
                                            <li>Acts affecting the good name of the school</li>
                                            <li>Gross disrespect to faculty/administration</li>
                                            <li>Unauthorized solicitation</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning d-block mb-1">1st offense: 1 week suspension</span>
                                        <span class="badge badge-danger d-block mb-1">2nd offense: 1 month suspension</span>
                                        <span class="badge badge-dark d-block">3rd offense: 1 semester suspension</span>
                                        <small class="text-muted mt-1 d-block">4 violations in one semester = Grave offense</small>
                                    </td>
                                </tr>
                                <tr class="table-danger">
                                    <td><strong>GRAVE OFFENSES</strong></td>
                                    <td>
                                        <ul class="pl-3 mb-0 small">
                                            <li>Stealing or influencing others to steal</li>
                                            <li>Use or trafficking of prohibited drugs</li>
                                            <li>Coming to class under influence of liquor</li>
                                            <li>Direct assault upon any person</li>
                                            <li>Insubordination to school authorities</li>
                                            <li>Misappropriation of funds</li>
                                            <li>All types of bullying (including cyber-bullying)</li>
                                            <li>Submission of plagiarized papers</li>
                                            <li>Forgery and falsification of documents</li>
                                            <li>Destroying school facilities and equipment</li>
                                            <li>Acts of lasciviousness</li>
                                            <li>Cyber Libel (RA 10175)</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger d-block">1st and last offense: NON-ADMISSION / EXPULSION</span>
                                        <small class="text-muted mt-1 d-block">Note: Expulsion entails non-issuance of Good Moral Character.</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Administrative Actions -->
                    <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                        <h5 class="text-primary mb-3"><i class="fa fa-balance-scale mr-2"></i>A. Administrative Actions and Proceedings</h5>
                        <p class="text-muted">Any administrative action must comply with the minimum standards of due process:</p>
                        <ol class="text-muted">
                            <li class="mb-2">The student must be informed in writing of the nature and cause of any accusation and required to answer in writing</li>
                            <li class="mb-2">If the student denies the accusation, CDLN shall form a fact-finding committee to hear and receive evidence</li>
                            <li class="mb-2">In all stages, the student shall have the right to assistance of a counsel of their own choice</li>
                            <li class="mb-2">The student shall have the right to examine evidence presented against them and to present evidence on their behalf</li>
                            <li class="mb-2">The fact-finding committee must consider all pieces of evidence presented</li>
                            <li class="mb-2">The student shall be informed in writing of the decision promulgated in their case</li>
                            <li>The punishment imposed shall be commensurate with the nature and gravity of the offense</li>
                        </ol>
                    </div>

                    <!-- Appeal -->
                    <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                        <h5 class="text-primary mb-3"><i class="fa fa-file-signature mr-2"></i>C. For Appeal</h5>
                        <p class="text-muted mb-0">If the student feels that the sanction is not commensurate to the offense committed, a <strong>written appeal signed by the student and their parents/guardian</strong> must be submitted to the CSA-Discipline prior to the effectivity of the sanction. If the decision was already approved by the College Administrator, the appeal must be addressed to them.</p>
                    </div>

                    <!-- Disciplinary Committee -->
                    <div class="bg-light rounded p-4 mb-4 shadow-sm border-top border-primary">
                        <h5 class="text-primary mb-3"><i class="fa fa-users mr-2"></i>D. Composition of the Disciplinary Committee</h5>
                        <p class="text-muted mb-2"><strong>Chairman:</strong> Coordinator of Student Affairs – Discipline</p>
                        <p class="text-muted mb-2"><strong>Members:</strong></p>
                        <ul class="text-muted pl-3">
                            <li>Department Chair of the department where the student belongs</li>
                            <li>Concerned Faculty/Personnel</li>
                            <li>Supreme Student Council President</li>
                        </ul>
                        <p class="text-muted mb-0">The Committee has the responsibility to investigate offenses that would merit dropping, dismissal or expulsion and impose the corresponding penalty. It also has the duty to review appealed cases and render a decision that may sustain, modify, or reverse the decision made by the CSA-Discipline.</p>
                    </div>

                    <!-- Community Service -->
                    <div class="bg-light rounded p-4 shadow-sm border-top border-primary">
                        <h5 class="text-primary mb-3"><i class="fa fa-hands mr-2"></i>E. Community Service Option</h5>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>A student shall render <strong>eight (8) hours of community service</strong> for each day of suspension</li>
                            <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>It should be put in writing and signed by the student and their parent/guardian</li>
                            <li class="py-1 border-bottom"><i class="fa fa-check text-primary mr-2"></i>The student may be assigned to do clerical, housekeeping, or other work as the case may be</li>
                            <li class="py-1"><i class="fa fa-check text-primary mr-2"></i>The CSA – Discipline monitors their accomplishment</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div><!-- end tab-content -->
    </div>
</div>

@endsection
