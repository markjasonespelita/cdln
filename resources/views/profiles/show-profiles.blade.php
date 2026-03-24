@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Profile Details</h4>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">

                {{-- LEFT: Profile Photo --}}
                <div class="col-md-3 text-center border-end">
                    {{-- Avatar --}}
                    @if (Auth::user()->profile_photo_path)
                        <img src="{{ url('storage/'.Auth::user()->profile_photo_path) }}" 
                            style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;" 
                            alt="Profile Photo">
                    @else
                        @php
                            $names = explode(' ', trim(Auth::user()->name));
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
                    <small class="text-muted">{{ ucfirst($item->gender) }}</small> <br>
                    <b>
                        {{ optional($item->departments)->name ?? "Not Available" }}
                        - {{ \Illuminate\Support\Str::of($item->year)->append(match($item->year % 100) {
                            11,12,13 => 'th',
                            default => match($item->year % 10) {
                                1 => 'st',
                                2 => 'nd',
                                3 => 'rd',
                                default => 'th'
                            }
                        }) }} Year
                    </b>

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
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th>Birth Date</th>
                                <td>{{ Smark\Smark\Dater::humanReadableDateWithDay($item->birthdate) }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{ $item->phonenumber }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $item->address }}</td>
                            </tr>
                        </table>
                    </div>

                    <hr>

                    <h6 class="text-uppercase text-muted mb-3">Family & Emergency</h6>

                    <div class="table-responsive">
                        <table class="table table-borderless table-sm">
                            <tr>
                                <th width="30%">Mother's Name</th>
                                <td>{{ $item->mothersname }}</td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td>{{ $item->fathersname }}</td>
                            </tr>
                            <tr>
                                <th>Emergency Contact</th>
                                <td>{{ $item->emergency_contact }}</td>
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
</div>
@endsection
