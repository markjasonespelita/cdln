
@extends('layouts.main')

@section('content')
    <div class='row'>
        <div class='col-lg-6 col-md-6 col-sm-12'>
            <h1>All Users</h1>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-12' style='text-align: right;'>
            <a href='{{ route('users.create') }}'><button class='btn btn-success'><i class='fas fa-plus'></i> Add Users</button></a>
        </div>
    </div>

    <div class='card'>
        <div class='card-body'>
            <div class='row'>
                <div class='col-lg-4 col-md-4 col-sm-12 mt-2'>
                    <div class='row'>
                        <div class='col-4'>
                            <button type='button' class='btn btn-outline-secondary dropdown-toggle' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Action
                            </button>
                            <div class='dropdown-menu'>
                                <a class='dropdown-item bulk-move-to-trash' href='#'>
                                    <i class='fa fa-trash'></i> Move to Trash
                                </a>
                                <a class='dropdown-item bulk-delete' href='#'>
                                    <i class='fa fa-trash'></i> <span class='text-danger'>Delete Permanently</span> <br> <small>(this action cannot be undone)</small>
                                </a>
                            </div>
                        </div>
                        <div class='col-8'>
                            <form action='{{ url('/users-paginate') }}' method='get'>
                                <div class='input-group'>
                                    <input type='number' name='paginate' class='form-control' placeholder='Paginate' value='{{ request()->get('paginate', 10) }}'>
                                    <div class='input-group-append'>
                                        <button class='btn btn-success' type='submit'><i class='fa fa-bars'></i></button>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12 mt-2'>
                    <form action='{{ url('/users-filter') }}' method='get'>
                        <div class='input-group'>
                            <input type='date' class='form-control' id='from' name='from' required>
                            <b class='pt-2'>- to -</b>
                            <input type='date' class='form-control' id='to' name='to' required>
                            <div class='input-group-append'>
                                <button type='submit' class='btn btn-primary form-control'><i class='fas fa-filter'></i></button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12 mt-2'>
                    <!-- Search Form -->
                    <form action='{{ url('/users-search') }}' method='GET'>
                        <div class='input-group'>
                            <input type='text' name='search' value='{{ request()->get('search') }}' class='form-control' placeholder='Search...'>
                            <div class='input-group-append'>
                                <button class='btn btn-success' type='submit'><i class='fa fa-search'></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th scope='col'>
                            <input type='checkbox' name='' id='' class='checkAll'>
                            </th>
                            <th></th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Email (Click to send an email)</th>
                            <th>Role</th>
                            <th>Approved</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($users as $item)

                            @php
                                $profile = \App\Models\Profiles::where('users_id', $item->id)->first();
                                $department = $profile ? \App\Models\Departments::find($profile->departments_id) : null;
                                $y = $profile?->year;

                                $yearOrdinal = null;
                                if ($y) {
                                    $yearOrdinal = $y . match(true) {
                                        in_array($y % 100, [11,12,13]) => 'th',
                                        $y % 10 === 1 => 'st',
                                        $y % 10 === 2 => 'nd',
                                        $y % 10 === 3 => 'rd',
                                        default => 'th'
                                    };
                                }
                            @endphp

                            <tr>
                                <th scope='row'>
                                    <input type='checkbox' name='' id='' class='check' data-id='{{ $item->id }}'>
                                </th>
                                <td>
                                    @if ($item->profile_photo_path)
                                        <img src="{{ url('storage/'.$item->profile_photo_path) }}" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;" alt="">
                                    @else
                                        @php
                                            $names = explode(' ', trim($item->name));
                                            $initials = strtoupper(substr($names[0], 0, 1) . substr(end($names), 0, 1));
                                        @endphp
                                        <div style="
                                            width: 50px;
                                            height: 50px;
                                            border-radius: 50%;
                                            background: linear-gradient(to bottom, #2196F3, #1976D2);
                                            color: white;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            font-weight: bold;
                                            font-size: 16px;
                                            font-family: sans-serif;
                                        ">
                                            {{ $initials }}
                                        </div>
                                    @endif
                                </td>
                                
                                <td>{{ $item->name }}</td>
                                <td>
                                    {{ $department?->name ?? 'Not set' }}
                                </td>
                                <td>
                                    @if(!$profile || !$department || !$y)
                                        <b class="text-secondary">This user hasn’t set up his/her profile</b>
                                    @else
                                        {{ $yearOrdinal }} Year
                                    @endif
                                </td>
                                <td><a class="text-primary fw-bold nav-link" href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    @if ($item->isApproved)
                                        <i class="fas fa-thumbs-up text-success" data-bs-toggle="modal" data-bs-target="#disapproveModal{{ $item->id }}"></i>

                                        <!-- Modal -->
                                        <div class="modal fade" id="disapproveModal{{ $item->id }}" tabindex="-1" aria-labelledby="disapproveModal{{ $item->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="disapproveModal{{ $item->id }}Label">Disapprove</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    Disapprove {{ $item->name }}?
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ url('/disapprove-user/'.$item->id) }}"><button type="button" class="btn btn-primary">Yes</button></a>
                                                </div>

                                                </div>
                                            </div>
                                        </div>

                                    @else
                                        <i class="fas fa-thumbs-down text-danger" data-bs-toggle="modal" data-bs-target="#approveModal{{ $item->id }}"></i>

                                        <!-- Modal -->
                                        <div class="modal fade" id="approveModal{{ $item->id }}" tabindex="-1" aria-labelledby="approveModal{{ $item->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="approveModal{{ $item->id }}Label">Approve</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    Approve {{ $item->name }}?
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="{{ url('/approve-user/'.$item->id) }}"><button type="button" class="btn btn-primary">Yes</button></a>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href='{{ route('users.show', $item->id) }}'><i class='fas fa-eye text-success'></i></a>
                                    <a href='{{ route('users.edit', $item->id) }}'><i class='fas fa-edit text-info'></i></a>
                                    <a href='{{ route('users.delete', $item->id) }}'><i class='fas fa-trash text-danger'></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Record...</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $users->links('pagination::bootstrap-5') }}

    <script src='{{ url('assets/jquery/jquery.min.js') }}'></script>
    <script>
        $(document).ready(function () {

            // checkbox

            var click = false;
            $('.checkAll').on('click', function() {
                $('.check').prop('checked', !click);
                click = !click;
                this.innerHTML = click ? 'Deselect' : 'Select';
            });

            $('.bulk-delete').click(function () {
                let array = [];
                $('.check:checked').each(function() {
                    array.push($(this).attr('data-id'));
                });

                $.post('/users-delete-all-bulk-data', {
                    ids: array,
                    _token: $("meta[name='csrf-token']").attr('content')
                }, function (res) {
                    window.location.reload();
                })
            })

            $('.bulk-move-to-trash').click(function () {
                let array = [];
                $('.check:checked').each(function() {
                    array.push($(this).attr('data-id'));
                });

                $.post('/users-move-to-trash-all-bulk-data', {
                    ids: array,
                    _token: $("meta[name='csrf-token']").attr('content')
                }, function (res) {
                    window.location.reload();
                })
            })
        });
    </script>
@endsection
