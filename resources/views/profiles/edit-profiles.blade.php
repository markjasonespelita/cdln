@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Profile</h4>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('profiles.update', $item->id) }}" method="POST">
                @csrf

                {{-- PERSONAL INFORMATION --}}
                <h6 class="text-uppercase text-muted mb-3">Personal Information</h6>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text"
                               class="form-control"
                               name="firstname"
                               value="{{ $item->firstname }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text"
                               class="form-control"
                               name="lastname"
                               value="{{ $item->lastname }}"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="male" {{ $item->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $item->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ $item->gender == 'other' ? 'selected' : '' }}>Other</option>
                        </select>

                        <div class="my-3">
                            <label for="">Course and Year</label>
                            <div class="row my-2">
                                <div class="col-6">
                                    <select class="form-control" id="department" name="departments_id">
                                        <option value="" disabled selected>-- Select Department --</option>
                                        @forelse (App\Models\Departments::all() as $department)
                                            @if ($item->departments_id === $department->id)
                                                <option value="{{ $department->id }}" selected>{{ $department->name }}</option>
                                            @else
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endif
                                        @empty
                                            <option value="0">No Department Available</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="year" class="form-select" required>
                                        <option value="">Select year</option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Birth Date</label>
                        <input type="date"
                               class="form-control"
                               name="birthdate"
                               value="{{ $item->birthdate }}"
                               required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text"
                               class="form-control"
                               name="phonenumber"
                               value="{{ $item->phonenumber }}"
                               required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text"
                               class="form-control"
                               name="address"
                               value="{{ $item->address }}"
                               required>
                    </div>
                </div>

                <hr>

                {{-- FAMILY & EMERGENCY --}}
                <h6 class="text-uppercase text-muted mb-3">Family & Emergency</h6>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mother's Name</label>
                        <input type="text"
                               class="form-control"
                               name="mothersname"
                               value="{{ $item->mothersname }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father's Name</label>
                        <input type="text"
                               class="form-control"
                               name="fathersname"
                               value="{{ $item->fathersname }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Emergency Contact</label>
                        <input type="text"
                               class="form-control"
                               name="emergency_contact"
                               value="{{ $item->emergency_contact }}"
                               required>
                    </div>
                </div>

                {{-- ACTIONS --}}
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('profiles.show', $item->id) }}" class="btn btn-light me-2">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Update Profile
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
