@extends('layouts.main')

@section('content')
    <h1 class="mb-4">📅 Event Details</h1>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4">

            {{-- Header --}}
            <div class="mb-4 border-bottom pb-3">
                <h3 class="fw-bold mb-1 text-primary">{{ $item->title }}</h3>
                <p class="text-muted mb-0">{{ $item->category ? ucfirst($item->category) : 'General' }}</p>
            </div>

            {{-- Event Info --}}
            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-secondary">🗓️ Start Date & Time</label>
                    <div>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->start_date) }}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-secondary">⏰ End Date & Time</label>
                    <div>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->end_date) }}</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-secondary">📍 Location</label>
                    <div>{{ $item->location ?? '—' }}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-semibold text-secondary">🕒 All Day Event</label>
                    <div>
                        @if($item->all_day == 1)
                            <span class="badge bg-success px-3 py-2">Yes</span>
                        @else
                            <span class="badge bg-secondary px-3 py-2">No</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="fw-semibold text-secondary">📝 Description</label>
                <div class="border rounded p-3 bg-light">
                    {!! nl2br(e($item->description)) !!}
                </div>
            </div>

            {{-- User & Metadata --}}
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label class="fw-semibold text-secondary">👤 Created By</label>
                    <div>{{ $item->users->name ?? "no data" }}</div>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="fw-semibold text-secondary">📅 Created At</label>
                    <div>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->created_at) }}</div>
                </div>
                <div class="col-md-4 mb-2">
                    <label class="fw-semibold text-secondary">🕓 Updated At</label>
                    <div>{{ Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->updated_at) }}</div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('events.index') }}" class="btn btn-outline-primary">
            ← Back to List
        </a>
    </div>
@endsection
