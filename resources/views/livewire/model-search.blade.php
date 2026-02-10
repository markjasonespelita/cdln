<div style="max-width:400px;">
    <input type="text" wire:model.live="search" placeholder="Search announcements..." class="form-control">

    @if($search && count($results))
        <ul class="list-group mt-2">
            @foreach($results as $item)
                <li class="list-group-item"><a href="{{ url('announcement-details/'.$item->id) }}" class="nav-link text-primary fw-bold">{{ $item->title }}</a></li>
            @endforeach
        </ul>
    @elseif($search)
        <div class="list-group mt-2">
            <div class="list-group-item text-muted">No results found</div>
        </div>
    @endif
</div>