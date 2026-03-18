<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <!-- <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary">KidKinder</span> -->
            <img src="/design/img/logo/logo.jpg" alt="" height="100px" width="100px">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about-us') }}" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
                {{-- <a href="class.html" class="nav-item nav-link">Classes</a>
                <a href="team.html" class="nav-item nav-link">Teachers</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div> --}}
                <a href="{{ url('/contact-us') }}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact</a>
            </div>

            @auth
                <div class="d-flex align-items-center">
                    <span class="mr-3 font-weight-bold text-primary">
                        Welcome, {{ Auth::user()->name }}
                    </span>
                    <a href="{{ route('logout') }}"
                       class="btn btn-info px-3"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ url('/dashboard') }}"><button class="ml-1 btn btn-success">Dashboard</button></a>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary px-3 mr-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary px-3">Register</a>
                </div>
            @endauth
        </div>
    </nav>
</div>
<!-- Navbar End -->