@extends('layouts.main')

@section('content')
    <h1 class="mb-4">🗓️ Create a New Event</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf

                {{-- Title --}}
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                {{-- Description --}}
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>

                {{-- Start Date and Time --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                    <div class="col-md-6">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time">
                    </div>
                </div>

                {{-- End Date and Time --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                    <div class="col-md-6">
                        <label for="end_time" class="form-label">End Time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time">
                    </div>
                </div>

                {{-- All Day --}}
                <div class="form-group mb-3">
                    <label for="all_day" class="form-label d-block">All Day Event</label>
                    <input type="checkbox" id="all_day" name="all_day" value="1">
                    <small class="text-muted ms-2">Check if this is an all-day event</small>
                </div>

                {{-- Location --}}
                <div class="form-group mb-3">
                    <label for="location" class="form-label">Location (optional)</label>
                    <input type="text" class="form-control" id="location" name="location">
                </div>

                {{-- Category --}}
                <div class="form-group mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" name="category">
                        <option value="general" selected>General</option>
                        <option value="meeting">Meeting</option>
                        <option value="training">Training</option>
                        <option value="announcement">Announcement</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn btn-primary mt-3">Create Event</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('all_day').addEventListener('change', function() {
            const timeInputs = document.querySelectorAll('#start_time, #end_time');
            timeInputs.forEach(input => input.parentElement.style.display = this.checked ? 'none' : 'block');
        });
    </script>
@endsection
