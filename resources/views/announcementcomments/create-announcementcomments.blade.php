
@extends('layouts.main')

@section('content')
    <h1>Create a new announcementcomments</h1>

    <div class='card'>
        <div class='card-body'>
            <form action='{{ route('announcementcomments.store') }}' method='POST'>
                @csrf
                
        <div class='form-group'>
            <label for='name'>Announcements_id</label>
            <input type='text' class='form-control' id='announcements_id' name='announcements_id' required>
        </div>
    
        <div class='form-group'>
            <label for='name'>Announcements_users_id</label>
            <input type='text' class='form-control' id='announcements_users_id' name='announcements_users_id' required>
        </div>
    
        <div class='form-group'>
            <label for='name'>Users_id</label>
            <input type='text' class='form-control' id='users_id' name='users_id' required>
        </div>
    
        <div class='form-group'>
            <label for='name'>Comment</label>
            <input type='text' class='form-control' id='comment' name='comment' required>
        </div>
    
                <button type='submit' class='mt-3 btn btn-primary'>Create</button>
            </form>
        </div>
    </div>

@endsection
