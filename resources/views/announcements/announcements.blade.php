
@extends('layouts.main')

@section('content')
    <div class='row'>
        <div class='col-lg-6 col-md-6 col-sm-12'>
            <h1>All Announcements</h1>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-12' style='text-align: right;'>
            <a href='{{ url('trash-announcements') }}'><button class='btn btn-danger'><i class='fas fa-trash'></i> Trash <span class='text-warning'>{{ App\Models\Announcements::where('isTrash', '1')->count() }}</span></button></a>
            <a href='{{ route('announcements.create') }}'><button class='btn btn-success'><i class='fas fa-plus'></i> Add Announcements</button></a>
        </div>
    </div>

    <div class='card'>
        <div class='card-body'>
            <div class='row'>
                <div class='mt-2 col-lg-4 col-md-4 col-sm-12'>
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
                            <form action='{{ url('/announcements-paginate') }}' method='get'>
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
                <div class='mt-2 col-lg-4 col-md-4 col-sm-12'>
                    <form action='{{ url('/announcements-filter') }}' method='get'>
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
                <div class='mt-2 col-lg-4 col-md-4 col-sm-12'>
                    <!-- Search Form -->
                    <form action='{{ url('/announcements-search') }}' method='GET'>
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
                            {{-- <th>#</th> --}}
                            <th>Title</th>
                            <th>Slug</th>
                            <th><i class="fas fa-thumbs-up"></i></th>
                            <th><i class="fas fa-comment"></i></th>
                            <th>Content</th>
                            <th>Category</th>
                            <th>Attachment</th>
                            <th>Published At</th>
                            <th>Expires At</th>
                            <th>Status</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($announcements as $item)
                            <tr>
                                <th scope='row'>
                                    <input type='checkbox' name='' id='' class='check' data-id='{{ $item->id }}'>
                                </th>
                                {{-- <td>{{ $item->id }}</td> --}}
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->slug }}</td>
                                <td><a class="fw-bold text-primary nav-link" href="{{ url('/announcement-details/'.$item->id) }}">{{ App\Models\Announcementreactions::where('announcements_id', $item->id)->count() }}</a></td>
                                <td><a class="fw-bold text-primary nav-link" href="{{ url('/announcement-details/'.$item->id) }}">{{ App\Models\Announcementcomments::where('announcements_id', $item->id)->count() }}</a></td>
                                <td>{{ Smark\Smark\Stringer::truncateString($item->content, 20) }}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    @php
                                        $file = $item->attachment_path;
                                        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                    @endphp

                                    @if ($file)
                                        @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                            {{-- 🖼 Image Preview --}}
                                            <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                                <img src="{{ asset('storage/announcements/' . $file) }}" alt="Image" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                                            </a>

                                        @elseif ($extension === 'pdf')
                                            {{-- 📄 PDF Icon --}}
                                            <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                                <i class="fas fa-file-pdf text-danger fa-2x"></i>
                                                <span class="ml-2">PDF File</span>
                                            </a>

                                        @elseif (in_array($extension, ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']))
                                            {{-- 🧾 MS Office --}}
                                            <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                                <i class="fas fa-file-word text-primary fa-2x"></i>
                                                <span class="ml-2">{{ strtoupper($extension) }} File</span>
                                            </a>

                                        @elseif (in_array($extension, ['mp3', 'wav', 'ogg']))
                                            {{-- 🎵 Audio Player --}}
                                            <audio controls style="width: 150px;">
                                                <source src="{{ asset('storage/announcements/' . $file) }}" type="audio/{{ $extension }}">
                                                Your browser does not support the audio element.
                                            </audio>

                                        @elseif (in_array($extension, ['mp4', 'mov', 'avi', 'mkv']))
                                            {{-- 🎬 Video Player --}}
                                            <video controls width="150">
                                                <source src="{{ asset('storage/announcements/' . $file) }}" type="video/{{ $extension }}">
                                                Your browser does not support the video tag.
                                            </video>

                                        @else
                                            {{-- 📦 Other Files --}}
                                            <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                                <i class="fas fa-file text-secondary fa-2x"></i>
                                                <span class="ml-2">{{ strtoupper($extension) }} File</span>
                                            </a>
                                        @endif
                                    @else
                                        <span class="text-muted">No attachment</span>
                                    @endif
                                </td>

                                <td>
                                    {{ $item->published_at 
                                        ? Smark\Smark\Dater::humanReadableDate($item->published_at) 
                                        : 'Not specified' }}
                                </td>

                                <td>
                                    {{ $item->expires_at 
                                        ? Smark\Smark\Dater::humanReadableDate($item->expires_at) 
                                        : 'Not specified' }}
                                </td>
                                <td class="fw-bold text-info">{{ $item->status }}</td>
                                <td>{{ $item->users->name ?? "no data" }}</td>
                                <td>
                                    <a href='{{ route('announcements.show', $item->id) }}'><i class='fas fa-eye text-success'></i></a>
                                    <a href='{{ route('announcements.edit', $item->id) }}'><i class='fas fa-edit text-info'></i></a>
                                    <a href='{{ route('announcements.delete', $item->id) }}'><i class='fas fa-trash text-danger'></i></a>
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

    {{ $announcements->links('pagination::bootstrap-5') }}

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

                $.post('/announcements-delete-all-bulk-data', {
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

                $.post('/announcements-move-to-trash-all-bulk-data', {
                    ids: array,
                    _token: $("meta[name='csrf-token']").attr('content')
                }, function (res) {
                    window.location.reload();
                })
            })
        });
    </script>
@endsection
