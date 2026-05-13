@extends('layouts.site')

@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Academics</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Academics</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
    <div class="text-center pb-2" data-aos="fade-down" data-aos-duration="800">
        <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
        <h1 class="mb-4">Meet Our Teachers</h1>
    </div>

    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;"
        data-aos="zoom-in" data-aos-duration="900">
        <img src="{{ url('assets/teachers.jpg') }}" alt="" style="width: 70%;">
    </div>

    <!-- ===================== COLLEGE DEPARTMENTS ===================== -->
    <div class="row">

        <!-- BSCS -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/jeffrey.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Jeffrey D. Dianito</h5>
                    <p class="text-primary small mb-3">BSCS Department</p>
                </div>
            </div>
        </div>

        <!-- BSBA -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/design/img/logo/logo.png') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Marijustine Tan</h5>
                    <p class="text-primary small mb-3">BSBA Department</p>
                </div>
            </div>
        </div>

        <!-- EDUCATION -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/joyce.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Joyce Bernadeth Y. Celajes</h5>
                    <p class="text-primary small mb-3">Education Department</p>
                </div>
            </div>
        </div>

        <!-- CRIM -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/anna-mae.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Anna Mae Durin</h5>
                    <p class="text-primary small mb-3">BSCRIM Department</p>
                </div>
            </div>
        </div>

    </div>

    <!-- ===================== SHS / JHS ===================== -->
    <div class="row">

        <!-- Grade 12 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_lailanne.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Lailanie Robelles</h5>
                    <p class="text-primary small mb-3">Grade 12 (Advisory)</p>
                </div>
            </div>
        </div>

        <!-- Grade 11 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/irin.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Rica Irinco</h5>
                    <p class="text-primary small mb-3">Grade 11</p>
                </div>
            </div>
        </div>

        <!-- Grade 10 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/derick.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Derick Ramos</h5>
                    <p class="text-primary small mb-3">Grade 10 (Advisory)</p>
                </div>
            </div>
        </div>

        <!-- Grade 9 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_celvestre.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Celvastre Cabe</h5>
                    <p class="text-primary small mb-3">Grade 9 (Advisory)</p>
                </div>
            </div>
        </div>

        <!-- Grade 8 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('/assets/teachers/erwin.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Cabe Erwin Angelo</h5>
                    <p class="text-primary small mb-3">Grade 8 (Advisory)</p>
                </div>
            </div>
        </div>

        <!-- Grade 7 -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700">
            <div class="card contact-card text-center h-100 shadow-sm border-0">
                <div class="card-body">
                    <img src="{{ url('assets/no-pic/no_pic_Marianne.jpg') }}" class="profile-img mb-3">
                    <h5 class="fw-bold mb-1">Marianne Dianito</h5>
                    <p class="text-primary small mb-3">Grade 7 (Advisory)</p>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .profile-img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #f1f1f1;
    }
    .contact-card {
        border-radius: 18px;
        transition: 0.25s ease;
    }
    .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 35px rgba(0, 0, 0, 0.12) !important;
    }
    .contact-card a {
        text-decoration: none;
        color: #333;
    }
    .contact-card a:hover {
        color: #0d6efd;
    }
</style>

<script>
    AOS.init({
        once: true,       // Animation fires only once as you scroll down
        easing: 'ease-out-cubic',
        offset: 60,
    });
</script>

@endsection
