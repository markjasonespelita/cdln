
@extends('layouts.main')

@section('content')
    <h1>Edit Departments</h1>

    <div class='card'>
        <div class='card-body'>
            <form action='{{ route('departments.update', $item->id) }}' method='POST'>
                @csrf
                
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class='form-control' id='name' name='name' value='{{ $item->name }}' required>
        </div>
    
                <button type='submit' class='mt-3 btn btn-primary'>Update</button>
            </form>
        </div>
    </div>

@endsection
