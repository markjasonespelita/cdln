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
            <div class="border-0 shadow-sm card">
                <div class="p-4 card-body">

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

                    <div>
                        <h1 class="text-dark">My Recent Reactions</h1>
                        <div class="row">
                            @forelse (App\Models\Announcementreactions::where('users_id', Auth::id())->orderBy('id', 'desc')->paginate(20) as $item)
                                <div class="mb-4 col-md-3">
                                    <div class="shadow-sm card h-100">
                                        <div class="card-body">
                                            <!-- Author -->
                                            <div class="mb-3 d-flex">
                                                <div>
                                                    <small class="text-secondary">Posted {{ App\Models\Announcements::where('id', $item->announcements_id)->value('created_at')->diffForHumans() }} | You reacted {{ App\Models\Announcementreactions::where('announcements_id', $item->announcements_id)->where('users_id', Auth::id())->value('created_at')->diffForHumans() }}</small>
                                                    <h6 class="mb-0 fw-bold">{{ App\Models\User::find(App\Models\Announcements::where('id', $item->announcements_id)->value('users_id'))->value('name') }}</h6>
                                                </div>
                                            </div>

                                            <!-- Post Content -->
                                            <p class="mb-3">
                                                {{ Smark\Smark\Stringer::truncateString(optional($item->announcements)->content, 150) ?? "no data" }}
                                            </p>

                                            <!-- Post Image (optional) -->

                                            <!-- Reactions / Actions -->
                                            <div class="pt-2 d-flex justify-content-between border-top">
                                                <button class="btn btn-sm btn-light">
                                                    👍 Reactions ({{ App\Models\Announcementreactions::where('announcements_id', $item->announcements_id)->count() }})
                                                </button>
                                                <button class="btn btn-sm btn-light">
                                                    💬 Comment ({{ App\Models\Announcementcomments::where('announcements_id', $item->announcements_id)->count() }})
                                                </button>
                                                <a href="{{ url('/announcement-details/'.$item->announcements_id) }}">
                                                    <button class="btn btn-sm btn-light">
                                                        <i class="fas fa-eye"></i> View Post
                                                    </button>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                no recent reactions
                            @endforelse
                        </div>

                        {{ App\Models\Announcementreactions::where('users_id', Auth::id())->orderBy('id', 'desc')->paginate(20)->links('pagination::bootstrap-5') }}

                    </div>

                </div>
            </div>
        @endif

    </div>
@endsection
