@extends('layouts.main')

@section('content')
    <h1>Dashboard</h1>
    <b class="top-b">Hello, {{ Auth::user()->name }} ({{ Auth::user()->role }})</b>
    <div class="row">
        @if (Auth::user()->role === 'admin')
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admins</h5>
                        <h1 class="dashboard-h1">
                            <i class="fas fa-users"></i> {{ App\Models\User::where('role', 'admin')->count() }}
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <h1 class="dashboard-h1">
                            <i class="fas fa-users"></i> {{ App\Models\User::where('role', 'user')->count() }}
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Announcements</h5>
                        <h1 class="dashboard-h1">
                            <i class="fas fa-bullhorn"></i> {{ App\Models\Announcements::count() }}
                            <i class="fas fa-comment"></i> {{ App\Models\Announcementcomments::count() }}
                        </h1>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <h1 class="dashboard-h1">
                            <i class="fas fa-calendar-alt"></i> {{ App\Models\Events::count() }}
                            <i class="fas fa-comment"></i> {{ App\Models\Eventcomments::count() }}
                        </h1> 
                    </div>
                </div>
            </div>
        @else
            <div class="card shadow-sm border-0">
                <div class="card-body text-center p-4">

                    <h4 class="mb-3 text-success">
                        🎉 Welcome, {{ auth()->user()->name }}!
                    </h4>

                    <p class="mb-2">
                        Your account has been <strong>successfully created</strong> and 
                        <span class="text-success fw-bold">approved by the admin</span>.
                    </p>

                    <p class="mb-3">
                        You can now <strong>comment</strong> and <strong>react</strong> to 
                        announcements and events.
                    </p>

                    <a href="/" class="btn btn-primary">
                        <i class="fas fa-globe"></i> Explore the website!
                    </a>

                    <hr>

                    @php
                        $hasProfile = \App\Models\Profiles::where('users_id', auth()->id())->exists();
                    @endphp

                    @if(!$hasProfile)
                        <p class="mb-2">
                            Don’t have a profile yet?
                        </p>
                        <a href="{{ route('profiles.create') }}" class="btn btn-primary">
                            Create Your Profile
                        </a>
                    @endif

                </div>
            </div>
        @endif

    </div>
@endsection
