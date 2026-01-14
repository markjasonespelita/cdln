
@extends('layouts.main')

@section('content')
    <h1>Edit Eventcomments</h1>

    <div class='card'>
        <div class='card-body'>
            <form action='{{ route('eventcomments.update', $item->id) }}' method='POST'>
                @csrf
                
        <div class='form-group'>
            <label for='name'>Events_id</label>
            <input type='text' class='form-control' id='events_id' name='events_id' value='{{ $item->events_id }}' required>
        </div>
    
        <div class='form-group'>
            <label for='name'>Events_users_id</label>
            <input type='text' class='form-control' id='events_users_id' name='events_users_id' value='{{ $item->events_users_id }}' required>
        </div>
    
        <div class='form-group'>
            <label for='name'>Comment</label>
            <input type='text' class='form-control' id='comment' name='comment' value='{{ $item->comment }}' required>
        </div>
    
                <button type='submit' class='mt-3 btn btn-primary'>Update</button>
            </form>
        </div>
    </div>

@endsection
