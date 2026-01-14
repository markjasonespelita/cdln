
@extends('layouts.main')

@section('content')
    <h1>Edit Announcement</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('announcements.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="department">Select Department</label>
                    <select class="form-control" id="department" name="departments_id">
                        <option value="" disabled>-- Select Department --</option>
                        @forelse (App\Models\Departments::all() as $department)
                            @if ($item->departments_id == $department->id)
                                <option value="{{ $department->id }}" selected>{{ $department->name }}</option>
                            @else
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endif
                        @empty
                            <option value="0" disabled>No Department Available</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select class="form-control" id="semester" name="semester">
                        <option value="" disabled selected>-- Select Semester --</option>
                        <option value="1">1st Semester</option>
                        <option value="2">2nd Semester</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $item->slug) }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ old('content', $item->content) }}" required>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="" disabled>-- Select Category --</option>
                        <option value="students" {{ old('category', $item->category) == 'students' ? 'selected' : '' }}>Students</option>
                        <option value="parents" {{ old('category', $item->category) == 'parents' ? 'selected' : '' }}>Parents</option>
                        <option value="staff" {{ old('category', $item->category) == 'staff' ? 'selected' : '' }}>Staff</option>
                        <option value="general" {{ old('category', $item->category) == 'general' ? 'selected' : '' }}>General</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="attachment_path">Attachment</label>
                    <input type="file" class="form-control" id="attachment_path" name="attachment_path">
                    @if($item->attachment_path)
                        <small class="text-muted">Current file: <a href="{{ asset('storage/announcements/' . $item->attachment_path) }}" target="_blank">{{ $item->attachment_path }}</a></small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', \Carbon\Carbon::parse($item->published_at)->format('Y-m-d')) }}">
                </div>

                <div class="form-group">
                    <label for="expires_at">Expires At</label>
                    <input type="date" class="form-control" id="expires_at" name="expires_at" value="{{ old('expires_at', $item->expires_at ? \Carbon\Carbon::parse($item->expires_at)->format('Y-m-d') : '') }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="" disabled>-- Select Status --</option>
                        <option value="draft" {{ old('status', $item->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $item->status) == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="archived" {{ old('status', $item->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>

                {{-- Users_id is usually handled automatically --}}
                {{-- <input type="hidden" name="users_id" value="{{ auth()->id() }}"> --}}

                <button type="submit" class="mt-3 btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection
