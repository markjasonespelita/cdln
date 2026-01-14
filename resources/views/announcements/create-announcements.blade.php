
@extends('layouts.main')

@section('content')
    <h1>Create a new announcement</h1>

    <div class='card'>
        <div class='card-body'>
            <form action='{{ route('announcements.store') }}' method='POST' enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="department">Select Department</label>
                    <select class="form-control" id="department" name="departments_id">
                        <option value="" disabled selected>-- Select Department --</option>
                        @forelse (App\Models\Departments::all() as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @empty
                            <option value="0">No Department Available</option>
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
                
                <div class='form-group'>
                    <label for='name'>Title</label>
                    <input type='text' class='form-control' id='title' name='title'>
                </div>
            
                <div class='form-group'>
                    <label for='name'>Slug</label>
                    <input type='text' class='form-control' id='slug' name='slug'>
                </div>
            
                <div class='form-group'>
                    <label for='name'>Content</label>
                    <input type='text' class='form-control' id='content' name='content'>
                </div>
            
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                        <option value="" disabled selected>-- Select Category --</option>
                        <option value="students">Students</option>
                        <option value="parents">Parents</option>
                        <option value="staff">Staff</option>
                        <option value="general">General</option>
                    </select>
                </div>
            
                <div class='form-group'>
                    <label for='name'>Attachment</label>
                    <input type='file' class='form-control' id='attachment_path' name='attachment_path'>
                </div>
            
                <div class='form-group'>
                    <label for='name'>Published at</label>
                    <input type='date' class='form-control' id='published_at' name='published_at'>
                </div>
            
                <div class='form-group'>
                    <label for='name'>Expires at</label>
                    <input type='date' class='form-control' id='expires_at' name='expires_at'>
                </div>
            
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="" disabled selected>-- Select Status --</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="archived">Archived</option>
                    </select>
                </div>
            
                {{-- <div class='form-group'>
                    <label for='name'>Users_id</label>
                    <input type='text' class='form-control' id='users_id' name='users_id'>
                </div> --}}
    
                <button type='submit' class='mt-3 btn btn-primary'>Create</button>
            </form>
        </div>
    </div>

@endsection
