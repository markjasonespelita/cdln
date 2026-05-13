@extends('layouts.site')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Admission</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Admission</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Intro Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="section-title pr-5"><span class="pr-2">Join Our Community</span></p>
                <h1 class="mb-4">Begin Your Journey at Colegio De Las Navas</h1>
                <p>We welcome students who are ready to grow in knowledge, character, and service. Our admissions process is designed to be straightforward and accessible, ensuring that every aspiring student has a fair opportunity to be part of the CDLN family.</p>
                <p>Whether you are enrolling for the first time, transferring from another institution, or returning to continue your studies, we are here to guide you every step of the way.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow" src="/design/img/about-1.jpg" alt="Admission">
            </div>
        </div>
    </div>
</div>
<!-- Intro End -->


<!-- Programs Offered Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5"><span class="px-2">What We Offer</span></p>
            <h1 class="mb-4">Programs Offered</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white rounded shadow-sm border-top border-primary p-4 h-100">
                    <i class="fa fa-graduation-cap fa-2x text-primary mb-3"></i>
                    <h5 class="font-weight-bold">Junior High School</h5>
                    <p class="m-0 text-muted">Grade 7 – Grade 10. A foundational stage preparing students for senior high and beyond with strong academic and values formation.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white rounded shadow-sm border-top border-primary p-4 h-100">
                    <i class="fa fa-book fa-2x text-primary mb-3"></i>
                    <h5 class="font-weight-bold">Senior High School</h5>
                    <p class="m-0 text-muted">Grade 11 – Grade 12. Academic and technical-vocational tracks that equip students for college or the workforce.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white rounded shadow-sm border-top border-primary p-4 h-100">
                    <i class="fa fa-briefcase fa-2x text-primary mb-3"></i>
                    <h5 class="font-weight-bold">BS Business Administration</h5>
                    <p class="m-0 text-muted">Prepares students for careers in business, management, and entrepreneurship with practical and theoretical training.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="bg-white rounded shadow-sm border-top border-primary p-4 h-100">
                    <i class="fa fa-shield-alt fa-2x text-primary mb-3"></i>
                    <h5 class="font-weight-bold">BS Criminology</h5>
                    <p class="m-0 text-muted">A program designed to produce competent criminologists through science, law, and justice-oriented education.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Programs Offered End -->


<!-- Admission Requirements Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5"><span class="px-2">How to Apply</span></p>
            <h1 class="mb-4">Admission Requirements</h1>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-pills justify-content-center mb-5" id="admissionTab" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link active px-4 py-2" id="new-tab" data-toggle="pill" href="#new" role="tab">New Student</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link px-4 py-2" id="transferee-tab" data-toggle="pill" href="#transferee" role="tab">Transferee</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link px-4 py-2" id="returnee-tab" data-toggle="pill" href="#returnee" role="tab">Returnee / Shiftee</a>
            </li>
            <li class="nav-item mb-2">
                <a class="nav-link px-4 py-2" id="shs-tab" data-toggle="pill" href="#shs" role="tab">Senior High School</a>
            </li>
        </ul>

        <div class="tab-content" id="admissionTabContent">

            <!-- New Student -->
            <div class="tab-pane fade show active" id="new" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold text-primary mb-3"><i class="fa fa-user-plus mr-2"></i>For New / Freshmen Students</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Original and photocopy of Form 138 (Report Card)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Original and photocopy of Good Moral Character Certificate from previous school</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> PSA-authenticated Birth Certificate (original)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> 2x2 ID photos (4 pieces, white background)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Accomplished Admission / Application Form</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Entrance Examination (scheduled by the Registrar's Office)</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-2"></i> Medical Certificate from a licensed physician</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transferee -->
            <div class="tab-pane fade" id="transferee" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold text-primary mb-3"><i class="fa fa-exchange-alt mr-2"></i>For Transferee Students</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Honorable Dismissal / Transfer Credentials from previous school</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Official Transcript of Records (OTR) or True Copy of Grades</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Good Moral Character Certificate</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> PSA-authenticated Birth Certificate (original)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> 2x2 ID photos (4 pieces, white background)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Accomplished Admission / Application Form</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-2"></i> Medical Certificate from a licensed physician</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Returnee / Shiftee -->
            <div class="tab-pane fade" id="returnee" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold text-primary mb-3"><i class="fa fa-redo mr-2"></i>For Returnee / Shiftee Students</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Letter of Intent addressed to the College Administrator</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Latest Official Transcript of Records or True Copy of Grades</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Good Moral Character Certificate (if returning from another institution)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> 2x2 ID photos (4 pieces, white background)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Accomplished Application for Re-Admission Form</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-2"></i> Medical Certificate from a licensed physician</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SHS -->
            <div class="tab-pane fade" id="shs" role="tabpanel">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-light rounded p-4 shadow-sm">
                            <h5 class="font-weight-bold text-primary mb-3"><i class="fa fa-school mr-2"></i>For Senior High School Applicants</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Original and photocopy of Form 138 (Grade 10 Report Card)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Certificate of Good Moral Character</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> PSA-authenticated Birth Certificate (original)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> 2x2 ID photos (4 pieces, white background)</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-2"></i> Accomplished Admission / Application Form</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-2"></i> Entrance Examination (scheduled by the Registrar's Office)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Admission Requirements End -->


<!-- Enrollment Steps Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5"><span class="px-2">Step by Step</span></p>
            <h1 class="mb-4">Enrollment Procedure</h1>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:60px; height:60px;">
                        <h4 class="text-white font-weight-bold m-0">1</h4>
                    </div>
                    <h5 class="font-weight-bold">Submit Requirements</h5>
                    <p class="text-muted mb-0">Prepare and submit all required documents to the Office of the Registrar.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:60px; height:60px;">
                        <h4 class="text-white font-weight-bold m-0">2</h4>
                    </div>
                    <h5 class="font-weight-bold">Take Entrance Exam</h5>
                    <p class="text-muted mb-0">Schedule and take the entrance examination as required for your program.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:60px; height:60px;">
                        <h4 class="text-white font-weight-bold m-0">3</h4>
                    </div>
                    <h5 class="font-weight-bold">Pay Enrollment Fees</h5>
                    <p class="text-muted mb-0">Proceed to the Finance and Accounting Office to settle your enrollment fees.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:60px; height:60px;">
                        <h4 class="text-white font-weight-bold m-0">4</h4>
                    </div>
                    <h5 class="font-weight-bold">Get Your Schedule</h5>
                    <p class="text-muted mb-0">Receive your class schedule, student ID, and officially begin your CDLN journey.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Enrollment Steps End -->


<!-- Scholarships Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5"><span class="px-2">Financial Assistance</span></p>
            <h1 class="mb-4">Scholarships & Grants</h1>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-light rounded border-top border-primary shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-star fa-2x text-primary mb-3"></i>
                    <h6 class="font-weight-bold">Student Assistantship</h6>
                    <p class="text-muted small mb-0">Free tuition and allowances for qualified student assistants who render service to assigned offices.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-light rounded border-top border-primary shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-trophy fa-2x text-primary mb-3"></i>
                    <h6 class="font-weight-bold">Dean's List Scholar</h6>
                    <p class="text-muted small mb-0">Recognition and privileges for students who achieve a Term Weighted Average (TWA) of 1.75 or above.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-light rounded border-top border-primary shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-hands-helping fa-2x text-primary mb-3"></i>
                    <h6 class="font-weight-bold">DSWD Grant</h6>
                    <p class="text-muted small mb-0">Financial assistance from the Department of Social Welfare and Development for qualified indigent students.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="bg-light rounded border-top border-primary shadow-sm p-4 h-100 text-center">
                    <i class="fa fa-landmark fa-2x text-primary mb-3"></i>
                    <h6 class="font-weight-bold">Government Scholarships</h6>
                    <p class="text-muted small mb-0">Iskolar ng Probinsya, Congressional Scholarship (CHED STUFAP), and Municipal Scholarship grants available.</p>
                </div>
            </div>

        </div>
        <div class="text-center mt-3">
            <p class="text-muted">For scholarship inquiries, please visit the <strong>Office of Student Affairs (OSA)</strong> or the <strong>Office of the Registrar</strong>.</p>
        </div>
    </div>
</div>
<!-- Scholarships End -->


<!-- Cancellation Policy Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center pb-4">
            <p class="section-title px-5"><span class="px-2">Important Policy</span></p>
            <h1 class="mb-4">Cancellation of Enrollment</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white rounded shadow-sm p-5">
                    <p>Students who wish to discontinue their studies during the term must notify the Office of the College Registrar in writing <strong>not later than the fourth week of the term</strong>.</p>
                    <div class="border-left border-primary pl-4 mb-4">
                        <p class="mb-1"><strong>Within the 1st week of classes:</strong> 10% charge of total amount due</p>
                        <p class="mb-0"><strong>Within the 2nd week of classes:</strong> 20% charge of total amount due</p>
                    </div>
                    <p>Withdrawal or cancellation made after the second week of classes means the student may be charged for all school fees. Non-compliance within the two-week period forfeits the student's right to any refund.</p>
                    <p class="mb-0">A written consent from a parent or guardian is required for cancellation of enrollment.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cancellation Policy End -->


<!-- Contact / CTA Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <p class="section-title px-5"><span class="px-2">Get In Touch</span></p>
                <h1 class="mb-4">Have Questions About Admission?</h1>
                <p class="mb-5">Our Registrar's Office and Office of Student Affairs are ready to assist you. Visit us during office hours or send us a message.</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="bg-light rounded p-4">
                            <i class="fa fa-map-marker-alt fa-2x text-primary mb-3"></i>
                            <h6 class="font-weight-bold">Visit Us</h6>
                            <p class="text-muted small mb-0">Colegio De Las Navas, Las Navas, Northern Samar</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="bg-light rounded p-4">
                            <i class="fa fa-clock fa-2x text-primary mb-3"></i>
                            <h6 class="font-weight-bold">Office Hours</h6>
                            <p class="text-muted small mb-0">Monday – Friday<br>8:00 AM – 5:00 PM</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="bg-light rounded p-4">
                            <i class="fa fa-envelope fa-2x text-primary mb-3"></i>
                            <h6 class="font-weight-bold">Email Us</h6>
                            <p class="text-muted small mb-0">registrar@cdln.edu.ph</p>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-2 py-2 px-5">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Contact / CTA End -->

@endsection
