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
        @endif
    </div>
@endsection
