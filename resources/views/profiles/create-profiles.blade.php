@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4 text-light">Create Profile Information</h4>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('profiles.store') }}" method="POST">
                @csrf

                {{-- PERSONAL INFORMATION --}}
                <h6 class="text-uppercase text-muted mb-3">Personal Information</h6>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Gender</label>
                        <select name="gender" class="form-select" required>
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Birth Date</label>
                        <input type="date" class="form-control" name="birthdate" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phonenumber" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                </div>

                <hr>

                {{-- FAMILY & EMERGENCY --}}
                <h6 class="text-uppercase text-muted mb-3">Family & Emergency</h6>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" name="mothersname" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Father's Name</label>
                        <input type="text" class="form-control" name="fathersname" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Emergency Contact</label>
                        <input type="text" class="form-control" name="emergency_contact" required>
                    </div>
                </div>

                {{-- ACTIONS --}}
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('profiles.index') }}" class="btn btn-light me-2">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Create Profile
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
