
@extends('layouts.main')

@section('content')

    <h1 class="mb-4">Announcement Details</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <tr>
                    <th width="200">Department</th>
                    <td class="fw-bold">{{ $item->departments->name ?? "no data" }}</td>
                </tr>

                <tr>
                    <th width="200">Semester</th>
                    <td class="fw-bold">{{ ($item->semester === 1) ? "1st Semester" : "2nd Semester" }}</td>
                </tr>

                <tr>
                    <th width="200">Title</th>
                    <td class="fw-bold">{{ $item->title }}</td>
                </tr>

                <tr>
                    <th>Slug</th>
                    <td>{{ $item->slug }}</td>
                </tr>

                <tr>
                    <th>Content</th>
                    <td>{{ $item->content }}</td>
                </tr>

                <tr>
                    <th>Category</th>
                    <td>
                        <span class="badge bg-primary px-3 py-2 rounded-pill text-uppercase">{{ $item->category }}</span>
                    </td>
                </tr>

                <tr>
                    <th>Attachment</th>
                    <td>
                        @php
                            $file = $item->attachment_path;
                            $extension = $file ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : null;
                        @endphp

                        @if ($file)
                            @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                {{-- 🖼 Image --}}
                                <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                    <img src="{{ asset('storage/announcements/' . $file) }}" alt="Image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px;">
                                </a>
                            @elseif ($extension === 'pdf')
                                {{-- 📄 PDF --}}
                                <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                    <i class="fas fa-file-pdf text-danger fa-2x"></i>
                                    <span class="ml-2">PDF File</span>
                                </a>
                            @elseif (in_array($extension, ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']))
                                {{-- 🧾 Office --}}
                                <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                    <i class="fas fa-file-word text-primary fa-2x"></i>
                                    <span class="ml-2">{{ strtoupper($extension) }} File</span>
                                </a>
                            @elseif (in_array($extension, ['mp3', 'wav', 'ogg']))
                                {{-- 🎵 Audio --}}
                                <audio controls style="width: 250px;">
                                    <source src="{{ asset('storage/announcements/' . $file) }}" type="audio/{{ $extension }}">
                                    Your browser does not support the audio element.
                                </audio>
                            @elseif (in_array($extension, ['mp4', 'mov', 'avi', 'mkv']))
                                {{-- 🎬 Video --}}
                                <video controls width="250">
                                    <source src="{{ asset('storage/announcements/' . $file) }}" type="video/{{ $extension }}">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                {{-- 📦 Others --}}
                                <a href="{{ asset('storage/announcements/' . $file) }}" target="_blank">
                                    <i class="fas fa-file text-secondary fa-2x"></i>
                                    <span class="ml-2">{{ strtoupper($extension) }} File</span>
                                </a>
                            @endif
                        @else
                            <span class="text-muted fst-italic">No attachment</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Other Files</th>
                    <td>
                        <div class="d-flex flex-wrap gap-3 mb-3">
                            @forelse ($otherFiles as $file)
                                @php
                                    $filename = $file->file; // Adjust to your model attribute
                                    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                                    $fileUrl = asset('storage/announcementsOtherFiles/' . $filename); // adjust path
                                @endphp

                                <div style="min-width: 150px; max-width: 150px; text-align: center;">

                                    {{-- Delete Button --}}
                                    <!-- Trash Button triggers this file's modal -->
                                    <div style="text-align: right; font-size: 12px">
                                        <button 
                                            class="btn btn-sm btn-danger top-0 end-0 m-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#{{ $file->id }}"
                                            type="button"
                                        >
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                        {{-- 🖼 Image --}}
                                        <a href="{{ $fileUrl }}" target="_blank">
                                            <img src="{{ $fileUrl }}" alt="Image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px;">
                                        </a>
                                    @elseif ($extension === 'pdf')
                                        {{-- 📄 PDF --}}
                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-danger" style="font-size: 2rem;">
                                            <i class="fas fa-file-pdf"></i>
                                            <div>PDF File</div>
                                        </a>
                                    @elseif (in_array($extension, ['doc', 'docx']))
                                        {{-- 🧾 Word --}}
                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-primary" style="font-size: 2rem;">
                                            <i class="fas fa-file-word"></i>
                                            <div>Word File</div>
                                        </a>
                                    @elseif (in_array($extension, ['xls', 'xlsx']))
                                        {{-- 📊 Excel --}}
                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-success" style="font-size: 2rem;">
                                            <i class="fas fa-file-excel"></i>
                                            <div>Excel File</div>
                                        </a>
                                    @elseif (in_array($extension, ['ppt', 'pptx']))
                                        {{-- 📈 PowerPoint --}}
                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-warning" style="font-size: 2rem;">
                                            <i class="fas fa-file-powerpoint"></i>
                                            <div>PowerPoint File</div>
                                        </a>
                                    @elseif (in_array($extension, ['mp3', 'wav', 'ogg']))
                                        {{-- 🎵 Audio --}}
                                        <audio controls style="width: 100%;">
                                            <source src="{{ $fileUrl }}" type="audio/{{ $extension }}">
                                            Your browser does not support the audio element.
                                        </audio>
                                    @elseif (in_array($extension, ['mp4', 'mov', 'avi', 'mkv']))
                                        {{-- 🎬 Video --}}
                                        <video controls width="150" style="border-radius: 8px;">
                                            <source src="{{ $fileUrl }}" type="video/{{ $extension }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        {{-- 📦 Other --}}
                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-secondary" style="font-size: 2rem;">
                                            <i class="fas fa-file"></i>
                                            <div>{{ strtoupper($extension) }} File</div>
                                        </a>
                                    @endif
                                </div>

                                <!-- Modal specific to this file -->
                                <div class="modal fade" id="{{ $file->id }}" tabindex="-1" aria-labelledby="{{ $file->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST" action="{{ route('announcementotherfiles.destroy', $file->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="{{ $file->id }}Label">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    Are you sure you want to delete this file? <br>

                                                    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                        {{-- 🖼 Image --}}
                                                        <a href="{{ $fileUrl }}" target="_blank">
                                                            <img src="{{ $fileUrl }}" alt="Image" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px;">
                                                        </a>
                                                    @elseif ($extension === 'pdf')
                                                        {{-- 📄 PDF --}}
                                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-danger" style="font-size: 2rem;">
                                                            <i class="fas fa-file-pdf"></i>
                                                            <div>PDF File</div>
                                                        </a>
                                                    @elseif (in_array($extension, ['doc', 'docx']))
                                                        {{-- 🧾 Word --}}
                                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-primary" style="font-size: 2rem;">
                                                            <i class="fas fa-file-word"></i>
                                                            <div>Word File</div>
                                                        </a>
                                                    @elseif (in_array($extension, ['xls', 'xlsx']))
                                                        {{-- 📊 Excel --}}
                                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-success" style="font-size: 2rem;">
                                                            <i class="fas fa-file-excel"></i>
                                                            <div>Excel File</div>
                                                        </a>
                                                    @elseif (in_array($extension, ['ppt', 'pptx']))
                                                        {{-- 📈 PowerPoint --}}
                                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-warning" style="font-size: 2rem;">
                                                            <i class="fas fa-file-powerpoint"></i>
                                                            <div>PowerPoint File</div>
                                                        </a>
                                                    @elseif (in_array($extension, ['mp3', 'wav', 'ogg']))
                                                        {{-- 🎵 Audio --}}
                                                        <audio controls style="width: 100%;">
                                                            <source src="{{ $fileUrl }}" type="audio/{{ $extension }}">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    @elseif (in_array($extension, ['mp4', 'mov', 'avi', 'mkv']))
                                                        {{-- 🎬 Video --}}
                                                        <video controls width="150" style="border-radius: 8px;">
                                                            <source src="{{ $fileUrl }}" type="video/{{ $extension }}">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @else
                                                        {{-- 📦 Other --}}
                                                        <a href="{{ $fileUrl }}" target="_blank" class="d-block text-secondary" style="font-size: 2rem;">
                                                            <i class="fas fa-file"></i>
                                                            <div>{{ strtoupper($extension) }} File</div>
                                                        </a>
                                                    @endif
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a href="{{ url('destroy-announcementotherfiles/'.$file->id) }}"><button type="submit" class="btn btn-danger">Yes, Delete</button></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            @empty
                                <span class="text-muted fst-italic">No other files uploaded.</span>
                            @endforelse
                        </div>

                        <form action="{{ route('announcementotherfiles.store', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" multiple>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Upload</button>
                        </form>
                    </td>
                </tr>


                <tr>
                    <th>Published At</th>
                    <td>
                        {{ $item->published_at
                            ? Smark\Smark\Dater::humanReadableDate($item->published_at)
                            : 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <th>Expires At</th>
                    <td>
                        {{ $item->expires_at
                            ? Smark\Smark\Dater::humanReadableDate($item->expires_at)
                            : 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($item->status === 'draft')
                            <span class="badge bg-secondary px-3 py-2 rounded-pill">Draft</span>
                        @elseif ($item->status === 'published')
                            <span class="badge bg-success px-3 py-2 rounded-pill">Published</span>
                        @elseif ($item->status === 'archived')
                            <span class="badge bg-warning px-3 py-2 rounded-pill text-dark">Archived</span>
                        @else
                            <span class="badge bg-light text-muted px-3 py-2 rounded-pill">Unknown</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Posted By</th>
                    <td>{{ $item->users->name ?? 'No data' }}</td>
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

            <div class="mt-3">
                <a href="{{ route('announcements.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
                <a href="{{ route('announcements.edit', $item->id) }}" class="btn btn-info">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('announcements.delete', $item->id) }}" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Delete
                </a>
            </div>
        </div>
    </div>


    <a href='{{ route('announcements.index') }}' class='btn btn-primary'>Back to List</a>
@endsection
