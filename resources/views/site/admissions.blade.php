@extends('layouts.site')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Admissions</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Admissions</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Admissions Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">

            <!-- Sidebar Navigation -->
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="list-group shadow-sm" style="border-radius: 8px; overflow: hidden; position: sticky; top: 20px;">
                    <div class="list-group-item font-weight-bold text-white" style="background: #1e5fa3; font-family: inherit; font-size: 0.9rem; letter-spacing: 0.5px;">
                        <i class="fa fa-list mr-2"></i> Quick Navigation
                    </div>
                    <a href="#college-admission" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> College Admission
                    </a>
                    <a href="#admission-policies" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Admission Policies
                    </a>
                    <a href="#admission-requirements" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Admission Requirements
                    </a>
                    <a href="#application-procedure" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Application Procedure
                    </a>
                    <a href="#registration-enrollment" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Registration & Enrollment
                    </a>
                    <a href="#enrollment-procedure" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Enrollment Procedure
                    </a>
                    <a href="#academic-load" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Academic Load
                    </a>
                    <a href="#other-policies" class="list-group-item list-group-item-action pl-4" style="font-size: 0.9rem;">
                        &rsaquo;&nbsp; Other Policies
                    </a>
                    <a href="#transfer" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Transfer of Student
                    </a>
                    <a href="#retention" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Retention Policies
                    </a>
                    <a href="#attendance" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Class Attendance
                    </a>
                    <a href="#grading" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Grading System
                    </a>
                    <a href="#graduation" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Graduation
                    </a>
                    <a href="#honors" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Honors & Awards
                    </a>
                    <a href="#clearance" class="list-group-item list-group-item-action">
                        <i class="fa fa-check text-primary mr-2" style="font-size: 0.8rem;"></i> Student Clearance
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">

                <!-- ── I. COLLEGE ADMISSION ─────────────────── -->
                <div id="college-admission" style="padding-top: 10px;">
                    <p class="section-title pr-5"><span class="pr-2">Part I</span></p>
                    <h1 class="mb-4">College Admission Requirements & Procedures</h1>
                </div>

                <!-- A. Admission Policies -->
                <div id="admission-policies" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">A. Admission Policies</h4>
                    <p>Admission to Colegio De Las Navas is open to all senior high school graduates regardless of sex, nationality, religion or political affiliation. Students who graduated under the old basic education curriculum may also be admitted. Admission is based on:</p>
                    <ul class="list-inline m-0 mb-3">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Performance in the College Admission Test (CAT)</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Choice of Program and quota set for specific program</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Good Moral Character</li>
                    </ul>

                    <h5 class="font-weight-bold mt-4 mb-3">Program-Specific GWA Requirements</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="bg-white rounded p-3 shadow-sm h-100" style="border-left: 4px solid #1e5fa3;">
                                <h6 class="font-weight-bold text-primary">Teacher Education</h6>
                                <span class="badge badge-primary mb-2">GWA: 84–88%</span>
                                <p class="mb-0 small">No final grade below 81%. Preferably HUMSS strand graduate.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="bg-white rounded p-3 shadow-sm h-100" style="border-left: 4px solid #1e5fa3;">
                                <h6 class="font-weight-bold text-primary">BS Criminology</h6>
                                <span class="badge badge-primary mb-2">GWA: 81–85%</span>
                                <p class="mb-0 small">No final grade below 80%. Preferably HUMSS strand graduate.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="bg-white rounded p-3 shadow-sm h-100" style="border-left: 4px solid #1e5fa3;">
                                <h6 class="font-weight-bold text-primary">BS Computer Science</h6>
                                <span class="badge badge-primary mb-2">GWA: at least 80%</span>
                                <p class="mb-0 small">No final grade below 75%. Preferably ICT strand graduate.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="bg-white rounded p-3 shadow-sm h-100" style="border-left: 4px solid #1e5fa3;">
                                <h6 class="font-weight-bold text-primary">BS Business Administration</h6>
                                <span class="badge badge-primary mb-2">GWA: at least 80%</span>
                                <p class="mb-0 small">No final grade below 75%. Preferably ABM strand graduate.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Admission Requirements -->
                <div id="admission-requirements" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">B. Admission Requirements</h4>

                    <!-- Tab Nav -->
                    <ul class="nav nav-pills mb-3" id="reqTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="freshmen-tab" data-toggle="pill" href="#freshmen" role="tab">Incoming Freshmen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="transferee-tab" data-toggle="pill" href="#transferee" role="tab">Transferees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="returning-tab" data-toggle="pill" href="#returning" role="tab">Returning Students</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="reqTabContent">
                        <div class="tab-pane fade show active" id="freshmen" role="tabpanel">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Form 138 – High School Card</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Certification of Good Moral Character</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Admission Slip (issued by OSAS after CAT)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>3 pcs 2×2 colored ID picture with nametag</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>1 pc long brown envelope</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="transferee" role="tabpanel">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Honorable Dismissal (transfer credential) from last school attended</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transcript of Records</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Certificate of Good Moral Character from last school attended</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Admission Slip (issued by OSAS after Entrance Examination)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>3 pcs 2×2 colored ID picture with nametag</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>1 pc long brown envelope</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="returning" role="tabpanel">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Duly signed Student Clearance</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- C. Application Procedure -->
                <div id="application-procedure" class="bg-light rounded p-4 mb-5 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-4">C. Application Procedure</h4>
                    <div class="row">
                        @php
                            $steps = [
                                ['num' => 1, 'title' => 'Present Entry Credentials', 'desc' => 'Present photocopy of Form 138 / TOR / Certification to the OSAS office.'],
                                ['num' => 2, 'title' => 'Pay for the CAT', 'desc' => 'Pay the College Admission Test fee of ₱250.00.'],
                                ['num' => 3, 'title' => 'Fill Out the Application Form', 'desc' => 'Complete the official application form at the OSAS.'],
                                ['num' => 4, 'title' => 'Oral Reading with Comprehension', 'desc' => 'Undergo oral reading assessment as part of the admissions evaluation.'],
                                ['num' => 5, 'title' => 'Take the College Admission Test', 'desc' => 'Sit for the CAT on the scheduled date. Results are valid for the current school year only.'],
                                ['num' => 6, 'title' => 'Interview by Department Head', 'desc' => 'Undergo interview by the Department Head of your chosen course.'],
                            ];
                        @endphp
                        @foreach($steps as $step)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex bg-white rounded p-3 shadow-sm h-100">
                                <div class="d-flex align-items-center justify-content-center rounded-circle text-white font-weight-bold mr-3 flex-shrink-0"
                                    style="width:36px;height:36px;background:#1e5fa3;font-size:0.9rem;">
                                    {{ $step['num'] }}
                                </div>
                                <div>
                                    <h6 class="font-weight-bold mb-1">{{ $step['title'] }}</h6>
                                    <p class="mb-0 small text-muted">{{ $step['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="alert alert-warning mt-3 mb-0 small">
                        <i class="fa fa-exclamation-triangle mr-2"></i>
                        CAT result is <strong>valid only for the current school year</strong>. Failure to enroll within the valid period forfeits the result.
                    </div>
                </div>


                <!-- ── II. REGISTRATION & ENROLLMENT ──────── -->
                <div id="registration-enrollment">
                    <p class="section-title pr-5"><span class="pr-2">Part II</span></p>
                    <h1 class="mb-4">Registration & Enrollment</h1>
                </div>

                <!-- Rules of Registration -->
                <div class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">A. Rules of Registration</h4>
                    <ul class="list-inline m-0">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transfer to another institution during the school term is discouraged, especially for graduating students. Written consent from both institutions is required.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>No student shall be accepted for enrollment without proper school credentials presented on or before the end of the enrollment period.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>A student is officially enrolled after submission of credentials and being allowed to attend classes. Submitted credentials cannot be withdrawn.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>The name and personal data in the student's birth certificate or alien certificate of registration shall prevail for all enrollment records.</li>
                    </ul>
                </div>

                <!-- B. Enrollment Procedure -->
                <div id="enrollment-procedure" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">B. Enrollment Procedure</h4>

                    <ul class="nav nav-pills mb-3" id="enrollTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ef-tab" data-toggle="pill" href="#ef" role="tab">Freshmen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ec-tab" data-toggle="pill" href="#ec" role="tab">Continuing / Returning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="et-tab" data-toggle="pill" href="#et" role="tab">Transferees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="es-tab" data-toggle="pill" href="#es" role="tab">Special Needs</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="enrollTabContent">

                        <!-- Freshmen -->
                        <div class="tab-pane fade show active" id="ef" role="tabpanel">
                            @php
                                $fSteps = [
                                    ['t'=>'Secure CAT Result / Admission Slip', 'd'=>'At the Office of Student Affairs and Services (OSAS).'],
                                    ['t'=>'Pay Registration Fee', 'd'=>'Pay ₱250.00 at the Municipal Treasurer\'s Office.'],
                                    ['t'=>'Final Interview', 'd'=>'Proceed to the Department Chair indicated in the admission slip.'],
                                    ['t'=>'Present Admission Credentials', 'd'=>'Submit originals to the Department Head or assigned personnel for records verification.'],
                                    ['t'=>'Secure & Fill Plotting Form', 'd'=>'Obtain from the Department Chair; list subjects and secure approval.'],
                                    ['t'=>'Medical Examination', 'd'=>'Administered by the School Nurse.'],
                                    ['t'=>'Secure Library Card', 'd'=>''],
                                    ['t'=>'Photo Shoot for School ID', 'd'=>''],
                                    ['t'=>'Secure School Uniform', 'd'=>'Through the SSC Office.'],
                                    ['t'=>'Assessment & Partial Payment', 'd'=>'Proceed to Accounting Office; pay 1/3 of total fees at Municipal Treasurer\'s Office.'],
                                    ['t'=>'Proceed to MIS for Subject Encoding', 'd'=>'Ensure signatures of Librarian, School Nurse, School ID, and Garments are secured.'],
                                    ['t'=>'Secure Certificate of Registration (COR)', 'd'=>'From the Management Information System (MIS) office.'],
                                    ['t'=>'Secure Class Cards', 'd'=>'From the Department Head.'],
                                ];
                            @endphp
                            @foreach($fSteps as $i => $s)
                            <div class="d-flex align-items-start mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-circle text-white font-weight-bold mr-3 flex-shrink-0"
                                    style="width:32px;height:32px;background:#1e5fa3;font-size:0.8rem;margin-top:2px;">
                                    {{ $i + 1 }}
                                </div>
                                <div class="bg-white rounded p-3 flex-fill shadow-sm" style="border-left: 3px solid #f5a623;">
                                    <strong class="d-block text-primary" style="font-size:0.95rem;">{{ $s['t'] }}</strong>
                                    @if($s['d'])<p class="mb-0 small text-muted mt-1">{{ $s['d'] }}</p>@endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Continuing -->
                        <div class="tab-pane fade" id="ec" role="tabpanel">
                            @php
                                $cSteps = [
                                    ['t'=>'Present Clearance', 'd'=>''],
                                    ['t'=>'Pay Registration Fee', 'd'=>'Pay ₱250.00 at the Municipal Treasurer\'s Office.'],
                                    ['t'=>'Secure & Fill Plotting Form', 'd'=>'From the Department Chair; list subjects and secure approval.'],
                                    ['t'=>'Medical Examination', 'd'=>'Administered by the School Nurse.'],
                                    ['t'=>'Secure Library Card', 'd'=>''],
                                    ['t'=>'Photo Shoot for School ID', 'd'=>''],
                                    ['t'=>'Secure School Uniform', 'd'=>'Through the SSC Office.'],
                                    ['t'=>'Assessment & Partial Payment', 'd'=>'Pay 1/3 of total fees at Municipal Treasurer\'s Office.'],
                                    ['t'=>'Proceed to MIS for Subject Encoding', 'd'=>'Ensure all required signatures are obtained.'],
                                    ['t'=>'Secure Certificate of Registration (COR)', 'd'=>''],
                                    ['t'=>'Secure Class Cards', 'd'=>'From the Department Head.'],
                                ];
                            @endphp
                            @foreach($cSteps as $i => $s)
                            <div class="d-flex align-items-start mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-circle text-white font-weight-bold mr-3 flex-shrink-0"
                                    style="width:32px;height:32px;background:#1e5fa3;font-size:0.8rem;margin-top:2px;">
                                    {{ $i + 1 }}
                                </div>
                                <div class="bg-white rounded p-3 flex-fill shadow-sm" style="border-left: 3px solid #f5a623;">
                                    <strong class="d-block text-primary" style="font-size:0.95rem;">{{ $s['t'] }}</strong>
                                    @if($s['d'])<p class="mb-0 small text-muted mt-1">{{ $s['d'] }}</p>@endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Transferees -->
                        <div class="tab-pane fade" id="et" role="tabpanel">
                            @php
                                $tSteps = [
                                    ['t'=>'Secure Endorsement Slip', 'd'=>'From the Department Chair to take the Qualifying Exam. If not qualified, proceed to Step 2.'],
                                    ['t'=>'Present Admission Slip & Credentials', 'd'=>'Submit originals to the Registrar\'s Office registration clerk.'],
                                    ['t'=>'Subject Evaluation by Registrar', 'd'=>'Have subjects evaluated.'],
                                    ['t'=>'Pay Registration Fee', 'd'=>'Pay ₱250.00 at the Municipal Treasurer\'s Office.'],
                                    ['t'=>'Secure & Fill Plotting Form', 'd'=>'From the Department Chair; list subjects and secure approval.'],
                                    ['t'=>'Medical Examination', 'd'=>''],
                                    ['t'=>'Secure Library Card & Apply for School ID', 'd'=>''],
                                    ['t'=>'Photo Shoot for School ID', 'd'=>''],
                                    ['t'=>'Secure School Uniform', 'd'=>''],
                                    ['t'=>'Assessment & Partial Payment', 'd'=>'Pay 1/3 of total fees at Municipal Treasurer\'s Office.'],
                                    ['t'=>'Proceed to MIS for Subject Encoding', 'd'=>''],
                                    ['t'=>'Secure Certificate of Registration (COR)', 'd'=>''],
                                    ['t'=>'Secure Class Cards', 'd'=>'From the Department Head.'],
                                ];
                            @endphp
                            @foreach($tSteps as $i => $s)
                            <div class="d-flex align-items-start mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-circle text-white font-weight-bold mr-3 flex-shrink-0"
                                    style="width:32px;height:32px;background:#1e5fa3;font-size:0.8rem;margin-top:2px;">
                                    {{ $i + 1 }}
                                </div>
                                <div class="bg-white rounded p-3 flex-fill shadow-sm" style="border-left: 3px solid #f5a623;">
                                    <strong class="d-block text-primary" style="font-size:0.95rem;">{{ $s['t'] }}</strong>
                                    @if($s['d'])<p class="mb-0 small text-muted mt-1">{{ $s['d'] }}</p>@endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Special Needs -->
                        <div class="tab-pane fade" id="es" role="tabpanel">
                            @php
                                $sSteps = [
                                    ['t'=>'Inquiry & Initial Consultation', 'd'=>'Parents/guardians visit the school or contact the admission office. A meeting is scheduled with the OSAS Coordinator to discuss the student\'s needs, available programs, and required documentation.'],
                                    ['t'=>'Submission of Requirements', 'd'=>'PSA Live Birth, Form 138, Good Moral Certificate, Admission Slip, 3 pcs 2×2 ID photos, 1 long brown envelope, Medical Assessment Reports (if applicable, e.g. X-Ray), and valid ID and contact details of parent/guardian.'],
                                    ['t'=>'Admission Testing & Evaluation', 'd'=>'Pay Registration Fee (₱250.00). Undergo admission test assessing cognitive, academic, and functional skills. Results reviewed by the admissions committee.'],
                                    ['t'=>'Release of Results & Admission Decision', 'd'=>'OSAS informs parents/guardians of results within a specific period. CAT Result issued if the student qualifies.'],
                                    ['t'=>'Enrollment & Payment of Fees', 'd'=>'Visit Department Head to secure plotting form. Complete enrollment documents (acceptance letter, enrollment agreement, updated medical records). Proceed to Accounting to settle fees, then Registrar for subject encoding and COR issuance.'],
                                ];
                            @endphp
                            @foreach($sSteps as $i => $s)
                            <div class="d-flex align-items-start mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-circle text-white font-weight-bold mr-3 flex-shrink-0"
                                    style="width:32px;height:32px;background:#1e5fa3;font-size:0.8rem;margin-top:2px;">
                                    {{ $i + 1 }}
                                </div>
                                <div class="bg-white rounded p-3 flex-fill shadow-sm" style="border-left: 3px solid #f5a623;">
                                    <strong class="d-block text-primary" style="font-size:0.95rem;">{{ $s['t'] }}</strong>
                                    @if($s['d'])<p class="mb-0 small text-muted mt-1">{{ $s['d'] }}</p>@endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                <!-- C. Academic Load -->
                <div id="academic-load" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">C. Academic Load</h4>
                    <p>One academic load of three (3) units is equivalent to 54 lecture hours or corresponding laboratory hours. Full-time college students may carry a semestral load of <strong>24 units or more</strong> as specified in their approved curricular programs.</p>
                    <div class="alert alert-info small mb-3">
                        <i class="fa fa-sun mr-2"></i><strong>Summer Term:</strong> Normal load is 9 units. The College Registrar/Department Head may allow a minimum of 6 units in justifiable cases.
                    </div>

                    <h5 class="font-weight-bold mt-3 mb-2">D. Unit Overload</h5>
                    <p>Overloading is allowed <strong>only for graduating students</strong>, with a maximum of <strong>6 units</strong> over the normal load. Unit overload is <em>not permitted</em> for:</p>
                    <ul class="list-inline m-0">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-times text-danger mr-3"></i>Students undergoing Practice Teaching, OJT, or Practicum</li>
                        <li class="py-2 border-bottom"><i class="fa fa-times text-danger mr-3"></i>Irregular students with academic deficiencies</li>
                        <li class="py-2 border-bottom"><i class="fa fa-times text-danger mr-3"></i>Students who obtained a failing mark in overload subjects the preceding semester</li>
                    </ul>
                </div>

                <!-- Other Policies -->
                <div id="other-policies" class="bg-light rounded p-4 mb-5 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">Other Enrollment Policies</h4>

                    <h5 class="font-weight-bold mt-3 mb-2">E. Pre-Requisite & Advanced Subjects Simultaneously</h5>
                    <p>A student may enroll in pre-requisite and advanced subjects simultaneously when:</p>
                    <ul class="list-inline m-0 mb-3">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>The pre-requisite is a repeated subject</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>The student has superior scholastic standing</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>The student is graduating at the end of the school term</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Approved by the Department Chair or authorized academic official</li>
                    </ul>

                    <h5 class="font-weight-bold mt-3 mb-2">F. Changing Classes & Adjustment of Subjects</h5>
                    <p>Transfer to another class requires approval of the College Registrar with recommendation from the Department Head. Students may request adjustments within <strong>10 days</strong> after the end of enrollment.</p>

                    <h5 class="font-weight-bold mt-3 mb-2">G. Cross-Enrollment</h5>
                    <p>No student may enroll in a course offered by another institution without written consent from the Department Chair approved by the College Administrator.</p>

                    <h5 class="font-weight-bold mt-3 mb-2">H. Dropping from a Course</h5>
                    <p>Students who wish to drop or withdraw any subject must file an application at the Registrar's Office. Dropping is only allowed <strong>before the Mid-Term Examination</strong>. After that, the student will receive a failing mark unless found meritorious by the faculty.</p>

                    <h5 class="font-weight-bold mt-3 mb-2">I. Shifting Degree Program</h5>
                    <p>Shifting is allowed <strong>only once</strong> under these conditions:</p>
                    <ul class="list-inline m-0">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Must pass the qualifying exam for the new program</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Must have a GWA of at least 85% the previous semester, with no failing, dropped, or incomplete rating in general education subjects</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Must be a first- or second-year student</li>
                    </ul>
                    <div class="alert alert-warning mt-3 mb-0 small">
                        <i class="fa fa-exclamation-triangle mr-2"></i>A third-year student may shift only upon recommendation and endorsement of the concerned Department Chair.
                    </div>
                </div>


                <!-- ── III. TRANSFER ──────────────────────── -->
                <div id="transfer">
                    <p class="section-title pr-5"><span class="pr-2">Part III</span></p>
                    <h1 class="mb-4">Transfer of Student & Transfer Credentials</h1>
                </div>

                <div class="bg-light rounded p-4 mb-5 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <p>A student intending to transfer must secure a clearance. The College shall provide <strong>Honorable Dismissal</strong> or transfer credentials provided that the student has no outstanding financial obligations and is not under penalty of suspension or expulsion.</p>
                    <div class="alert alert-warning small mb-3">
                        <i class="fa fa-exclamation-triangle mr-2"></i>A student with a record of delinquency or acts against the school's reputation shall <strong>not</strong> be issued a Certificate of Good Moral Character.
                    </div>
                    <p class="mb-0">The College may withhold credentials of students with outstanding financial obligations or pending penalties. Credentials are released upon settlement or after penalties are served.</p>
                </div>


                <!-- ── ACADEMIC POLICIES ───────────────────── -->
                <div>
                    <p class="section-title pr-5"><span class="pr-2">Academic Directives</span></p>
                    <h1 class="mb-4">Academic Policies</h1>
                </div>

                <!-- I. Retention -->
                <div id="retention" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">I. Retention Policies</h4>
                    <div id="retAccordion">

                        <div class="card border-0 mb-2">
                            <div class="card-header bg-white" id="rh1">
                                <button class="btn btn-block text-left font-weight-bold text-primary collapsed" data-toggle="collapse" data-target="#rc1">
                                    <i class="fa fa-chalkboard-teacher mr-2"></i> Teacher Education Department
                                </button>
                            </div>
                            <div id="rc1" class="collapse" data-parent="#retAccordion">
                                <div class="card-body pt-0">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing one Professional Education course + GWA of 2.75 or lower → placed on <strong>probationary status</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing two (cumulative) Professional Education Courses → <strong>not readmitted</strong> to the program.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing two or more academic courses in one semester → <strong>not readmitted</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Practice Teaching without completing prescribed intensive courses shall <strong>not receive credit</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transferees: GWA of at least <strong>85%</strong> required; must pass qualifying exam.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header bg-white" id="rh2">
                                <button class="btn btn-block text-left font-weight-bold text-primary collapsed" data-toggle="collapse" data-target="#rc2">
                                    <i class="fa fa-balance-scale mr-2"></i> Criminology Department
                                </button>
                            </div>
                            <div id="rc2" class="collapse" data-parent="#retAccordion">
                                <div class="card-body pt-0">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing one major course + GWA of 2.75 or lower → <strong>probationary status</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing two (cumulative) Major Courses → <strong>not readmitted</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing two or more academic courses in one semester → <strong>not readmitted</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Internship without prescribed pre-requisite intensive courses → <strong>no credit</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transferees: GWA of at least <strong>85%</strong> required; must pass qualifying exam.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header bg-white" id="rh3">
                                <button class="btn btn-block text-left font-weight-bold text-primary collapsed" data-toggle="collapse" data-target="#rc3">
                                    <i class="fa fa-laptop-code mr-2"></i> BS Computer Science
                                </button>
                            </div>
                            <div id="rc3" class="collapse" data-parent="#retAccordion">
                                <div class="card-body pt-0">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing grade in one academic unit → warning by Department Chair; load reduced by 3 units if no improvement next semester.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing/INC in two or three subjects (cumulative) → <strong>probationary status</strong>; may not be readmitted if unresolved.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transferees: GWA of at least <strong>78%</strong> required.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 mb-2">
                            <div class="card-header bg-white" id="rh4">
                                <button class="btn btn-block text-left font-weight-bold text-primary collapsed" data-toggle="collapse" data-target="#rc4">
                                    <i class="fa fa-briefcase mr-2"></i> Business Administration
                                </button>
                            </div>
                            <div id="rc4" class="collapse" data-parent="#retAccordion">
                                <div class="card-body pt-0">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing grade in one academic unit → warning by Department Chair; load reduced if no improvement.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Failing/INC in two or three subjects (cumulative) → <strong>probationary status</strong>; may not be readmitted.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Internship without prescribed intensive courses → <strong>no credit</strong>.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Transferees: GWA of at least <strong>78%</strong> required.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- II. Attendance -->
                <div id="attendance" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">II. Class Attendance</h4>
                    <p>Students who accumulate more than the maximum number of absences in any subject will be <strong>automatically dropped</strong> from that class.</p>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered table-hover bg-white text-center mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No. of Units</th>
                                    <th>Sessions per Week</th>
                                    <th>Max Absences (Auto-Drop)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>3</td><td>1</td><td>7</td></tr>
                                <tr><td>3</td><td>2</td><td>14</td></tr>
                                <tr><td>6</td><td>1</td><td>4</td></tr>
                                <tr><td>6</td><td>2</td><td>8</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-warning small mb-3">
                        <i class="fa fa-exclamation-triangle mr-2"></i>Students absent for more than <strong>7 non-consecutive class meetings</strong>, or with accumulated absences exceeding 20% of total class hours before midterms, will be automatically dropped.
                    </div>
                    <div class="alert alert-info small mb-3">
                        <i class="fa fa-ban mr-2"></i><strong>III. Sit-in & Tutorial Classes:</strong> The school does <strong>not</strong> allow sit-in and tutorial classes.
                    </div>
                    <div class="alert alert-info small mb-0">
                        <i class="fa fa-hourglass-half mr-2"></i><strong>IV. Tenure:</strong> Regular completion time is <strong>4 years</strong>, with a maximum residence of 4 years + 1 year grace period. Students who exceed this may not be readmitted.
                    </div>
                </div>

                <!-- V. Grading System -->
                <div id="grading" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">V. Grading System</h4>
                    <h5 class="font-weight-bold mb-2">Grade Components</h5>
                    <ul class="list-inline m-0 mb-4">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Written Works – Quizzes / Seatworks: <strong>10%</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Performance Tasks – Group / Class Activities: <strong>10%</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Midterm Exam: <strong>25%</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Final Exam: <strong>25%</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Final Output: <strong>25%</strong></li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Attendance: <strong>5%</strong></li>
                    </ul>

                    <h5 class="font-weight-bold mb-2">Numerical Rating Scale</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover bg-white text-center mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Mark</th>
                                    <th>Percentage Equivalent</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>1.0</td><td>97 – 100</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>1.25</td><td>94 – 96</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>1.5</td><td>91 – 93</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>1.75</td><td>88 – 90</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>2.0</td><td>85 – 87</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>2.25</td><td>82 – 84</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>2.5</td><td>79 – 81</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>2.75</td><td>76 – 78</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>3.0</td><td>75</td><td class="text-success font-weight-bold">Passed</td></tr>
                                <tr><td>INC</td><td>Incomplete</td><td class="text-primary font-weight-bold">No Final Exam</td></tr>
                                <tr><td>DRP</td><td>Dropped</td><td class="text-primary font-weight-bold">Withdrawn / 20%+ Absences</td></tr>
                                <tr><td>5.0</td><td>74 and below</td><td class="text-danger font-weight-bold">Failed</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-info small mt-3 mb-0">
                        <i class="fa fa-info-circle mr-2"></i>Students with an <strong>INC</strong> mark have <strong>one semester</strong> to complete their grades. Unresolved INC after one semester is automatically converted to <strong>5.0</strong> by the College Registrar.
                    </div>
                </div>

                <!-- VI. Graduation -->
                <div id="graduation" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">VI. Graduation</h4>
                    <h5 class="font-weight-bold mb-2">A. Requirements for Promotion</h5>
                    <p>A student earns academic credits for promotion when a final grade of at least <strong>75%</strong> is achieved in all curricular subjects.</p>
                    <h5 class="font-weight-bold mt-3 mb-2">B. Graduation Requirements</h5>
                    <ul class="list-inline m-0">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>File application for graduation at the College Registrar's Office at the start of the <strong>second semester of the fourth year</strong>.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Must satisfy all academic and other requirements prescribed by the College.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Must have earned more than <strong>90%</strong> of the academic units required in the curriculum at the College.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Deficiencies must be cleared <strong>at least 2 weeks before the end of the last semester</strong>.</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>No diploma or TOR issued unless all accountabilities (including Hardbound Thesis/Research) are cleared.</li>
                    </ul>
                </div>

                <!-- VII. Honors -->
                <div id="honors" class="bg-light rounded p-4 mb-4 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">VII. Honors & Special Awards</h4>

                    <h5 class="font-weight-bold mb-3">A. Academic Excellence / Latin Honors</h5>
                    <p>Awarded to students with a GWA of <strong>1.75 and up</strong>.</p>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3">
                            <div class="bg-white rounded p-3 text-center shadow-sm h-100" style="border-top: 4px solid #f5c518;">
                                <div style="font-size: 2rem;">🥇</div>
                                <h6 class="font-weight-bold mt-2 mb-1">Summa Cum Laude</h6>
                                <span class="badge badge-warning text-white">GWA: 1.0 – 1.25</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="bg-white rounded p-3 text-center shadow-sm h-100" style="border-top: 4px solid #adb5bd;">
                                <div style="font-size: 2rem;">🥈</div>
                                <h6 class="font-weight-bold mt-2 mb-1">Magna Cum Laude</h6>
                                <span class="badge badge-secondary">GWA: 1.26 – 1.50</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="bg-white rounded p-3 text-center shadow-sm h-100" style="border-top: 4px solid #cd7f32;">
                                <div style="font-size: 2rem;">🥉</div>
                                <h6 class="font-weight-bold mt-2 mb-1">Cum Laude</h6>
                                <span class="badge" style="background:#cd7f32;color:#fff;">GWA: 1.51 – 1.75</span>
                            </div>
                        </div>
                    </div>

                    <h5 class="font-weight-bold mt-3 mb-2">B. Leadership Award</h5>
                    <p>Given to students who pass the following criteria (certification required for each):</p>
                    <ul class="list-inline m-0 mb-3">
                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Member of CDLN recognized organizations (SSC, SBO, CWTS) — 20%</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Dynamic and effective leadership promoting student welfare — 20%</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Highest degree of initiative and self-confidence — 40%</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Good moral character — 20%</li>
                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Produced concrete projects benefiting the community — 20%</li>
                    </ul>

                    <h5 class="font-weight-bold mt-3 mb-2">C. Loyalty Award</h5>
                    <p class="mb-0">Given to students who completed studies at Colegio De Las Navas from <strong>Grade 7 (JHS)</strong> through <strong>Grade 12 (SHS)</strong> and from <strong>First Year to Fourth Year College</strong>, and who manifested good moral character.</p>
                </div>

                <!-- VIII. Clearance -->
                <div id="clearance" class="bg-light rounded p-4 mb-5 shadow-sm" style="border-top: 4px solid #1e5fa3;">
                    <h4 class="font-weight-bold mb-3">VIII. Student Clearance</h4>
                    <p>Students are given <strong>one month</strong> before the Final Examinations to fully settle all financial obligations — contributions, registration fees, outstanding loans, and property accountability from all offices and departments.</p>
                    <div class="alert alert-info small mb-3">
                        <i class="fa fa-info-circle mr-2"></i>Student Clearance is required for <strong>enrollment the next term</strong> and for the release of the <strong>Transcript of Records (TOR)</strong>.
                    </div>
                    <div class="alert alert-warning small mb-0">
                        <i class="fa fa-exclamation-triangle mr-2"></i>Senior students must complete their clearance <strong>before finally leaving school</strong> to avoid delays in TOR release.
                    </div>
                </div>

            </div><!-- /col-lg-9 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
<!-- Admissions End -->

@endsection
