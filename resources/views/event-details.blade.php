@extends('layouts.site')

@section('content')
    <!-- Header Start -->
    {{-- <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Event Detail</h3>
        </div>
    </div> --}}
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title pr-5"><span class="pr-2">Event</span></p>
                    <h1 class="mb-3">{{ $item->title }}</h1>
                    <div class="d-flex">
                        {{-- <p class="mr-3"><i class="fa fa-user text-primary"></i> Admin</p>
                        <p class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</p> --}}
                        <p class="mr-3"><i class="fa fa-comments text-primary"></i> {{ App\Models\Eventcomments::where('events_id', $item->id)->count() }}</p>
                    </div>
                </div>
                <div class="mb-5">
                    @php
                        $file = $item->attachment_path ?? null; // assuming you store file path or URL in $item->file
                        $extension = $file ? strtolower(pathinfo($file, PATHINFO_EXTENSION)) : null;
                    @endphp

                    {{-- File Preview --}}
                    @if ($file)
                        @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                            {{-- 🖼️ Image --}}
                            <img class="img-fluid rounded w-100 mb-4 border shadow-sm" src="{{ url('storage/events/'.$file) }}" alt="Image">

                        @elseif (in_array($extension, ['mp4', 'webm', 'ogg']))
                            {{-- 🎥 Video --}}
                            <div class="ratio ratio-16x9 mb-4">
                                <video controls class="rounded shadow-sm w-100">
                                    <source src="{{ url('storage/Events/'.$file) }}" type="video/{{ $extension }}">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        @elseif ($extension === 'pdf')
                            {{-- 📄 PDF --}}
                            <div class="border rounded shadow-sm mb-4" style="height: 600px;">
                                <iframe src="{{ url('storage/Events/'.$file) }}" class="w-100 h-100 rounded" style="border: none;"></iframe>
                            </div>

                        @elseif (in_array($extension, ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx']))
                            {{-- 🧾 Office Documents --}}
                            <div class="text-center p-4 bg-light rounded border shadow-sm mb-4">
                                <i class="fas fa-file-word fa-3x text-primary mb-3"></i>
                                <p class="mb-2">This document cannot be previewed here.</p>
                                <a href="{{ url('storage/Events/'.$file) }}" target="_blank" class="btn btn-outline-primary btn-sm">Download File</a>
                            </div>

                        @else
                            {{-- 📁 Unknown or Other File --}}
                            <div class="text-center p-4 bg-light rounded border shadow-sm mb-4">
                                <i class="fas fa-file fa-3x text-secondary mb-3"></i>
                                <p class="mb-2">Unsupported file type ({{ strtoupper($extension) }})</p>
                                <a href="{{ url('storage/Events/'.$file) }}" target="_blank" class="btn btn-outline-secondary btn-sm">Download File</a>
                            </div>
                        @endif
                    @endif

                    {{-- 📝 Content --}}
                    <p class="fs-5 mt-3">{{ $item->description }}</p>

                    <b>Published At: {{ ($item->published_at) ? Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->published_at) : "No Data" }}</b> <br>
                    <b>Expires At: {{ ($item->expires_at) ? Smark\Smark\Dater::humanReadableDateWithDayAndTime($item->expires_at) : "No Data" }}</b>
                </div>

                <!-- Related Post -->
                <div class="mb-5 mx-n3">
                    <h2 class="mb-4 ml-3">Other Events</h2>
                    <div class="owl-carousel post-carousel position-relative">
                        @forelse (App\Models\Events::all() as $event)
                            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
                                <div class="pl-3">
                                    <h5 class=""><a href="{{ url('event-details/'.$event->id) }}">{{ $event->title }}</a></h5>
                                    <div class="d-flex">
                                        {{-- <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> --}}
                                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{ App\Models\Eventcomments::where('events_id', $event->id)->count() }}</small>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Events...
                        @endforelse
                        
                    </div>
                </div>

                <!-- Comment List -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ App\Models\Eventcomments::where('events_id', $item->id)->count() }} Comments</h2>
                    @forelse (App\Models\Eventcomments::where('events_id', $item->id)->get() as $comment)
                        <div class="media mb-4">

                            @php
                                $user = $comment->users;
                                $photo = $user->profile_photo_path ?? null;
                                $initials = strtoupper(substr($user->name, 0, 1) . substr(last(explode(' ', $user->name)), 0, 1));
                            @endphp

                            {{-- If user has image --}}
                            @if ($photo)
                                <img src="{{ url('/storage/'.$photo) }}"
                                    alt="Image"
                                    class="img-fluid rounded-circle mr-3 mt-1"
                                    style="width: 45px; height:45px; object-fit:cover;">
                            @else
                                {{-- UI Avatar --}}
                                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center mr-3 mt-1"
                                    style="width: 45px; height: 45px; font-weight:bold; font-size:16px;">
                                    {{ $initials }}
                                </div>
                            @endif

                            <div class="media-body">
                                <h6>{{ $user->name ?? "no data" }}
                                    <small><i>{{ $comment->created_at->diffForHumans() }}</i></small>
                                </h6>
                                <p>{{ $comment->comment }}</p>
                                {{-- <button class="btn btn-sm btn-light">Reply</button> --}}

                                @auth
                                    @if (Auth::user()->id === $comment->users_id)
                                        <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#editModal{{ $comment->id }}"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}"><i class="fas fa-trash"></i> Delete</button>

                                        {{-- modlas --}}

                                        {{-- edit modal --}}

                                        <div class="modal fade" id="editModal{{ $comment->id }}" tabindex="-1" aria-labelledby="editModal{{ $comment->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModal{{ $comment->id }}Label">Edit Comment</h5>
                                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                </div>

                                                <div class="modal-body">
                                                    <form action='{{ route('eventcomments.update', $comment->id) }}' method='POST'>
                                                        @csrf
                                                    
                                                        <div class='form-group'>
                                                            <label for='name'>Comment</label>
                                                            {{-- <input type='text' class='form-control' id='comment' name='comment' value='{{ $comment->comment }}' required> --}}
                                                            <textarea name="comment" id="" cols="30" rows="10" class="form-control" required>{{ $comment->comment }}</textarea>
                                                        </div>
                                            
                                                        <button type='submit' class='mt-3 btn btn-primary'>Update</button>
                                                    </form>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                </div>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- delete modal --}}

                                        <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" aria-labelledby="deleteModal{{ $comment->id }}Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal{{ $comment->id }}Label">Delete Comment</h5>
                                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                                </div>

                                                <div class="modal-body">
                                                    <b>Do you want to delete this comment? This action cannot be undone.</b> <br>

                                                    <a href="{{ route('eventcomments.destroy', $comment->id) }}"><button type="button" class="btn btn-primary">Yes, Proceed</button></a>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endauth

                                
                            </div>
                        </div>
                    @empty
                        <div class="media mb-4">
                            <div class="media-body">
                                <p>No Comments...</p>
                            </div>
                        </div>
                    @endforelse
                    {{-- <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur, at tempor amet ipsum diam tempor at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Comment Form -->
                <div class="bg-light p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form action="{{ route('eventcomments.store', $item->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="message">Comment *</label>
                            <textarea id="message" name="comment" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Send Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4">
                    @php
                        $user = $item->users;
                        $nameParts = explode(' ', trim($user->name));
                        $initials = '';
                        if (count($nameParts) >= 2) {
                            $initials = strtoupper(substr($nameParts[0], 0, 1) . substr(end($nameParts), 0, 1));
                        } elseif (count($nameParts) === 1) {
                            $initials = strtoupper(substr($nameParts[0], 0, 2));
                        }
                    @endphp

                    @if(!empty($user->profile_photo_path))
                        {{-- 🖼️ User has profile photo --}}
                        <img class="img-fluid rounded-circle mx-auto mb-3 border shadow-sm"
                            src="{{ url('/storage/'.$user->profile_photo_path) }}"
                            style="width: 100px; height: 100px; object-fit: cover;"
                            alt="{{ $user->name }}">
                    @else
                        {{-- 🔤 Display initials if no photo --}}
                        <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center shadow-sm mx-auto mb-3"
                            style="width: 100px; height: 100px; font-size: 30px; font-weight: bold;">
                            {{ $initials }}
                        </div>
                    @endif
                    {{-- <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;"> --}}
                    <h3 class="text-secondary mb-3">{{ $user->name ?? "no data" }}</h3>
                    <p class="text-white m-0">({{ ucfirst($user->role) ?? "no data" }})<br>{{ $user->email ?? "no data" }}</p>
                </div>

                <!-- Search Form -->
                <div class="mb-5">
                    {{-- <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form> --}}
                </div>

                <!-- Category List -->
                {{-- <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="">Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div> --}}

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>

                <!-- Recent Post -->
                {{-- <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/post-2.jpg" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/post-3.jpg" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h5 class="">Diam amet eos at no eos</h5>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid rounded">
                </div>

                <!-- Tag Cloud -->
                {{-- <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div> --}}

                <!-- Single Image -->
                <div class="mb-5">
                    <img src="img/blog-3.jpg" alt="" class="img-fluid rounded">
                </div>

                <!-- Plain Text -->
                {{-- <div>
                    <h2 class="mb-4">Plain Text</h2>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection