<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Events};
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('events.events', [
            'events' => Events::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function details($eventId)
    {
        return view('event-details', [
            'item' => Events::where('id', $eventId)->first()
        ]);
    }

    public function trash()
    {
        return view('events.trash-events', [
            'events' => Events::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($eventsId)
    {
        Events::where('id', $eventsId)->update(['isTrash' => '0']);

        return redirect('/events');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create-events');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventsRequest $request)
    {
        // Combine date and time
        $start_datetime = $request->start_date . ' ' . $request->start_time;
        $end_datetime   = $request->end_date . ' ' . $request->end_time;

        Events::create([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $start_datetime,
            'end_date' => $end_datetime,
            'all_day' => $request->has('all_day') ? 1 : 0,
            'location' => $request->location,
            'category' => $request->category,
            'users_id' => Auth::user()->id,
        ]);

        return back()->with('success', 'Event Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events, $eventsId)
    {
        return view('events.show-events', [
            'item' => Events::where('id', $eventsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events, $eventsId)
    {
        return view('events.edit-events', [
            'item' => Events::where('id', $eventsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $events, $eventsId)
    {
        $events = Events::findOrFail($eventsId);

        // Combine date and time before saving
        $start_datetime = $request->start_date . ' ' . $request->start_time;
        $end_datetime   = $request->end_date . ' ' . $request->end_time;

        $events->update([
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $start_datetime,
            'end_date' => $end_datetime,
            'all_day' => $request->has('all_day') ? 1 : 0,
            'location' => $request->location,
            'category' => $request->category,
            'users_id' => Auth::user()->id,
        ]);

        return back()->with('success', 'Event Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Events $events, $eventsId)
    {
        return view('events.delete-events', [
            'item' => Events::where('id', $eventsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events, $eventsId)
    {

        Events::where('id', $eventsId)->update(['isTrash' => '1']);

        return redirect('/events');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $events = Events::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('events.events', compact('events', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the events based on the 'paginate' value
        $events = Events::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated events
        return view('events.events', compact('events'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for events
        $query = Events::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $events = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all events without filtering
            $events = $query->paginate(10);
        }

        // Return the view with events and the selected date range
        return view('events.events', compact('events', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Events::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Events::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Events::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}