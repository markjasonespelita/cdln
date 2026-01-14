
@extends('layouts.main')

@section('content')
    <h1>Eventcomments Details</h1>

    <div class='card'>
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table'>
                    <tr>
                        <th>ID</th>
                        <td>{{ $item->id }}</td>
                    </tr>
                    
        <tr>
            <th>Events_id</th>
            <td>{{ $item->events_id }}</td>
        </tr>
    
        <tr>
            <th>Events_users_id</th>
            <td>{{ $item->events_users_id }}</td>
        </tr>
    
        <tr>
            <th>Comment</th>
            <td>{{ $item->comment }}</td>
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
    </div>

    <a href='{{ route('eventcomments.index') }}' class='btn btn-primary'>Back to List</a>
@endsection
