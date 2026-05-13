@extends('layouts.site')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Contact Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Get In Touch</span></p>
                <h1 class="mb-4">Contact Us For Any Query</h1>
            </div>

            <div class="row mb-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-map-marker"></i>
                            <p>Address</p>
                            <h4>Municipality Of Las Navas</h4>
                            <small>Samar, Philippines</small>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-phone"></i>
                            <p>Telephone</p>
                            <h4>(055) 209-5081</h4>
                            <small>Municipal Hall Direct Line</small>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-envelope"></i>
                            <p>Email</p>
                            <h4>info@lasnavas.gov.ph</h4>
                            <small>For General Inquiries</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-clock"></i>
                            <p>Office Hours</p>
                            <h4>Monday - Friday: 8:00 AM - 5:00 PM</h4>
                            <small>Lunch Break: 12:00 PM - 1:00 PM</small>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> --}}
            <div class="container py-4">

    <!-- HEADER -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Contact Directory</h2>
        <p class="text-muted">Faculty and Staff Contact Information</p>
    </div>

    <div class="row g-4">

        <!-- ===================== COLLEGE DEPARTMENTS ===================== -->

        <!-- BSCS -->
        <div class="col-lg-6 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/gregorio.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Gregorio M. Orsolino</h5>
                    <p class="text-primary small mb-3">CDLN Founder</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:gregmorsolino@gmail.com">gregmorsolino@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09055861887">090 558 61887</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>Jan 24, 1964/p>
                </div>
            </div>
        </div>

        <!-- BSCS -->
        <div class="col-lg-6 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/inday.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Inday Lynn G. Orsolino</h5>
                    <p class="text-primary small mb-3">CDLN Founder</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:colegiodelasnavas@gmail.com">colegiodelasnavas@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09957611309">09957 611 309</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>Jan 24, 1964/p>
                </div>
            </div>
        </div>

        <!-- ===================== COLLEGE DEPARTMENTS ===================== -->

        <!-- BSCS -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/jeffrey.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Jeffrey D. Dianito</h5>
                    <p class="text-primary small mb-3">BSCS Department</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:jeffreydanesdianito28@gmail.com">jeffreydanesdianito28@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09200721568">0920 072 1568</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>June 28, 1990</p>
                </div>
            </div>
        </div>

        <!-- BSBA -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/design/img/logo/logo.png') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Marijustine Tan</h5>
                    <p class="text-primary small mb-3">BSBA Department</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:marijustinetan@gmail.com">marijustinetan@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09212541094">0921 254 1094</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>May 13, 1980</p>
                </div>
            </div>
        </div>

        <!-- EDUCATION -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/joyce.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Joyce Bernadeth Y. Celajes</h5>
                    <p class="text-primary small mb-3">Education Department</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:joycecelajescolin@gmail.com">joycecelajescolin@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09482475123">0948 247 5123</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>October 25, 1984</p>
                </div>
            </div>
        </div>

        <!-- CRIM -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/anna-mae.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Anna Mae Durin</h5>
                    <p class="text-primary small mb-3">BSCRIM Department</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:annamaedurin.edInbscrim@gmail.com">annamaedurin.edInbscrim@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09700872062">0970 087 2062</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>Aug. 23, 1988</p>
                </div>
            </div>
        </div>

        <!-- ===================== SHS / JHS ===================== -->

        <!-- Grade 12 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_lailanne.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Lailanie Robelles</h5>
                    <p class="text-primary small mb-3">Grade 12 (Advisory)</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:lailanierobelles@gmail.com">lailanierobelles@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09971008074">0997 100 8074</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>August 25, 1995</p>
                </div>
            </div>
        </div>

        <!-- Grade 11 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm bordstyler-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/irin.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Rica Irinco</h5>
                    <p class="text-primary small mb-3">Grade 11</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:irincoricam@gmail.com">irincoricam@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09368938392">0936 893 8392</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>July 27, 2000</p>
                </div>
            </div>
        </div>

        <!-- Grade 10 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/derick.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Derick Ramos</h5>
                    <p class="text-primary small mb-3">Grade 10 (Advisory)</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:derickramos020@gmail.com">derickramos020@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09455114462">0945 511 4462</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>August 17, 1996</p>
                </div>
            </div>
        </div>

        <!-- Grade 9 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_celvestre.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Celvastre Cabe</h5>
                    <p class="text-primary small mb-3">Grade 9 (Advisory)</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:celvastrecabe4@gmail.com">celvastrecabe4@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09606508833">0960 650 8833</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>October 17, 1977</p>
                </div>
            </div>
        </div>

        <!-- Grade 8 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/erwin.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Cabe Erwin Angelo</h5>
                    <p class="text-primary small mb-3">Grade 8 (Advisory)</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:cabeerwinangelo@gmail.com">cabeerwinangelo@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09513922520">0951 392 2520</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>August 24, 2002</p>
                </div>
            </div>
        </div>

        <!-- Grade 7 -->
        <div class="col-lg-4 col-md-6">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_Marianne.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Marianne Dianito</h5>
                    <p class="text-primary small mb-3">Grade 7 (Advisory)</p>
                    <p class="mb-1"><i class="fas fa-envelope text-danger me-2"></i>
                        <a href="mailto:MarianneDianito3@gmail.com">MarianneDianito3@gmail.com</a>
                    </p>
                    <p class="mb-1"><i class="fas fa-phone text-success me-2"></i>
                        <a href="tel:09552800435">0955 280 0435</a>
                    </p>
                    <p class="small text-muted mb-0"><i class="fas fa-cake-candles text-warning me-2"></i>January 17, 2002</p>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
.profile-img{
    width:110px;
    height:110px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #f1f1f1;
}
.contact-card{
    border-radius:18px;
    transition:0.25s ease;
}
.contact-card:hover{
    transform:translateY(-6px);
    box-shadow:0 14px 35px rgba(0,0,0,0.12)!important;
}
.contact-card a{
    text-decoration:none;
    color:#333;
}
.contact-card a:hover{
    color:#0d6efd;
}
</style>

            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <p>Colegio De Las Navas is committed to the total development of man who shares in shaping human existence of becoming the best of what they are, deeply driven by strong determination for change through continuous learning.</p>
                    <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Address</h5>
                            <p>{{ env('ADDRESS') }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p>{{ env('EMAIL') }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Phone</h5>
                            <p>{{ env('PHONE') }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Opening Hours</h5>
                            <strong>Monday - Friday:</strong>
                            <p class="m-0">08:00 AM - 05:00 PM </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
