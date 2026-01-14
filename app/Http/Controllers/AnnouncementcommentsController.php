<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Announcementcomments, Announcements};
use App\Http\Requests\StoreAnnouncementcommentsRequest;
use App\Http\Requests\UpdateAnnouncementcommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AnnouncementcommentsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('announcementcomments.announcementcomments', [
            'announcementcomments' => Announcementcomments::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('announcementcomments.trash-announcementcomments', [
            'announcementcomments' => Announcementcomments::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($announcementcommentsId)
    {
        Announcementcomments::where('id', $announcementcommentsId)->update(['isTrash' => '0']);

        return redirect('/announcementcomments');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcementcomments.create-announcementcomments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementcommentsRequest $request, $announcementId)
    {
        Announcementcomments::create([
            'announcements_id' => $announcementId,
            'announcements_users_id' => Announcements::where('id', $announcementId)->value('users_id'),
            'users_id' => Auth::user()->id,
            'comment' => $request->comment
        ]);

        return back()->with('success', 'Comment Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcementcomments $announcementcomments, $announcementcommentsId)
    {
        return view('announcementcomments.show-announcementcomments', [
            'item' => Announcementcomments::where('id', $announcementcommentsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcementcomments $announcementcomments, $announcementcommentsId)
    {
        return view('announcementcomments.edit-announcementcomments', [
            'item' => Announcementcomments::where('id', $announcementcommentsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementcommentsRequest $request, Announcementcomments $announcementcomments, $announcementcommentsId)
    {
        $announcementcomments = Announcementcomments::findOrFail($announcementcommentsId);

        $announcementcomments->comment = $request->comment;

        $announcementcomments->save();

        return back()->with('success', 'Announcementcomments Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Announcementcomments $announcementcomments, $announcementcommentsId)
    {
        return view('announcementcomments.delete-announcementcomments', [
            'item' => Announcementcomments::where('id', $announcementcommentsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcementcomments $announcementcomments, $announcementcommentsId)
    {

        Announcementcomments::where('id', $announcementcommentsId)->delete();

        return back();
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $announcementcomments = Announcementcomments::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('announcementcomments.announcementcomments', compact('announcementcomments', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the announcementcomments based on the 'paginate' value
        $announcementcomments = Announcementcomments::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated announcementcomments
        return view('announcementcomments.announcementcomments', compact('announcementcomments'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for announcementcomments
        $query = Announcementcomments::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $announcementcomments = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all announcementcomments without filtering
            $announcementcomments = $query->paginate(10);
        }

        // Return the view with announcementcomments and the selected date range
        return view('announcementcomments.announcementcomments', compact('announcementcomments', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementcomments::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementcomments::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Announcementcomments::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}