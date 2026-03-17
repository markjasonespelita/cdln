<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Eventcomments, Events};
use App\Http\Requests\StoreEventcommentsRequest;
use App\Http\Requests\UpdateEventcommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventcommentsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('eventcomments.eventcomments', [
            'eventcomments' => Eventcomments::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('eventcomments.trash-eventcomments', [
            'eventcomments' => Eventcomments::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($eventcommentsId)
    {
        Eventcomments::where('id', $eventcommentsId)->update(['isTrash' => '0']);

        return redirect('/eventcomments');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventcomments.create-eventcomments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventcommentsRequest $request, $eventId)
    {
        Eventcomments::create([
            'events_id' => $eventId,
            'events_users_id' => Events::where('id', $eventId)->value('users_id'),
            'users_id' => Auth::user()->id,
            'comment' => $request->comment
        ]);

        return back()->with('success', 'Eventcomments Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventcomments $eventcomments, $eventcommentsId)
    {
        return view('eventcomments.show-eventcomments', [
            'item' => Eventcomments::where('id', $eventcommentsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eventcomments $eventcomments, $eventcommentsId)
    {
        return view('eventcomments.edit-eventcomments', [
            'item' => Eventcomments::where('id', $eventcommentsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventcommentsRequest $request, Eventcomments $eventcomments, $eventcommentsId)
    {
        $eventcomments = Eventcomments::findOrFail($eventcommentsId);

        $eventcomments->comment = $request->comment;

        $eventcomments->save();

        return back()->with('success', 'Eventcomments Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Eventcomments $eventcomments, $eventcommentsId)
    {
        return view('eventcomments.delete-eventcomments', [
            'item' => Eventcomments::where('id', $eventcommentsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eventcomments $eventcomments, $eventcommentsId)
    {

        Eventcomments::where('id', $eventcommentsId)->delete();

        return back();
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $eventcomments = Eventcomments::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('eventcomments.eventcomments', compact('eventcomments', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the eventcomments based on the 'paginate' value
        $eventcomments = Eventcomments::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated eventcomments
        return view('eventcomments.eventcomments', compact('eventcomments'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for eventcomments
        $query = Eventcomments::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $eventcomments = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all eventcomments without filtering
            $eventcomments = $query->paginate(10);
        }

        // Return the view with eventcomments and the selected date range
        return view('eventcomments.eventcomments', compact('eventcomments', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Eventcomments::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Eventcomments::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Eventcomments::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}