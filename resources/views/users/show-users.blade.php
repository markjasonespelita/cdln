
@extends('layouts.main')

@section('content')
    <h1>Users Details</h1>

    {{-- <div class='card'>
        <div class='card-body'>
    
            @if ($item->profile_photo_path)
                <img src="{{ url('storage/'.$item->profile_photo_path) }}" 
                     style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;" 
                     alt="Profile Photo">
            @else
                @php
                    $names = explode(' ', trim($item->name));
                    $initials = strtoupper(substr($names[0], 0, 1) . substr(end($names), 0, 1));
                @endphp
                <div style="
                    width: 120px;
                    height: 120px;
                    border-radius: 50%;
                    background: linear-gradient(to bottom, #2196F3, #1976D2);
                    color: white;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 40px;
                    font-family: sans-serif;
                    margin-bottom: 15px;
                ">
                    {{ $initials }}
                </div>
            @endif
    
            <div class='table-responsive'>
                <table class='table'>
    
                    <tr>
                        <th>Name</th>
                        <td>{{ $item->name }}</td>
                    </tr>
    
                    <tr>
                        <th>Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
    
                    <tr>
                        <th>Role</th>
                        <td>{{ $item->role }}</td>
                    </tr>
    
                    <tr>
                        <th>Created At</th>
                        <td>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->created_at) }}</td>
                    </tr>
    
                    <tr>
                        <th>Updated At</th>
                        <td>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->updated_at) }}</td>
                    </tr>
    
                </table>
            </div>
        </div>
    </div> --}}

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">

                {{-- LEFT: Profile Photo --}}
                <div class="col-md-3 text-center border-end">
                    {{-- Avatar --}}
                    @if ($item->profile_photo_path)
                        <img src="{{ url('storage/'.$item->profile_photo_path) }}" 
                            style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;" 
                            alt="Profile Photo">
                    @else
                        @php
                            $names = explode(' ', trim($item->name));
                            $initials = strtoupper(substr($names[0], 0, 1) . substr(end($names), 0, 1));
                        @endphp
                        <div style="
                            width: 120px;
                            height: 120px;
                            border-radius: 50%;
                            background: linear-gradient(to bottom, #2196F3, #1976D2);
                            color: white;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-weight: bold;
                            font-size: 40px;
                            font-family: sans-serif;
                            margin-bottom: 15px;
                            margin: auto;
                        ">
                            {{ $initials }}
                        </div>
                    @endif

                    <h5 class="mb-0">{{ $item->firstname }} {{ $item->lastname }}</h5>
                    <small class="text-muted">{{ ucfirst($item->gender) }}</small>

                    <div class="mt-3">
                        <a href="{{ url('/user/profile') }}"
                           class="btn btn-sm btn-outline-success w-100 mb-2">
                            <i class="fas fa-edit"></i> Edit Profile Photo
                        </a>

                        <a href="{{ route('profiles.edit', $item->id) }}"
                           class="btn btn-sm btn-outline-info w-100 mb-2">
                            <i class="fas fa-edit"></i> Edit Profile
                        </a>

                        {{-- <a href="{{ route('profiles.delete', $item->id) }}"
                           class="btn btn-sm btn-outline-danger w-100">
                            <i class="fas fa-trash"></i> Delete
                        </a> --}}
                    </div>
                </div>

                {{-- RIGHT: Profile Information --}}
                <div class="col-md-9">
                    <h6 class="text-uppercase text-muted mb-3">Personal Information</h6>

                    <div class="table-responsive">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <th width="30%">ID</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('id') }}</td>
                            </tr>
                            <tr>
                                <th>Birth Date</th>
                                <td>{{ Smark\Smark\Dater::humanReadableDateWithDay(App\Models\Profiles::where('users_id', $item->id)->value('birthdate')) }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('phonenumber') }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('address') }}</td>
                            </tr>
                        </table>
                    </div>

                    <hr>

                    <h6 class="text-uppercase text-muted mb-3">Family & Emergency</h6>

                    <div class="table-responsive">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <th width="30%">Mother's Name</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('mothersname') }}</td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('fathersname') }}</td>
                            </tr>
                            <tr>
                                <th>Emergency Contact</th>
                                <td>{{ App\Models\Profiles::where('users_id', $item->id)->value('emergency_contact') }}</td>
                            </tr>
                        </table>
                    </div>

                    <hr>

                    <h6 class="text-uppercase text-muted mb-3">System Information</h6>

                    <table class="table table-borderless table-sm">
                        <tr>
                            <th width="30%">Created At</th>
                            <td>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->created_at) }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->updated_at) }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    
    

    <a href='{{ route('users.index') }}' class='btn btn-primary'>Back to List</a>
@endsection
