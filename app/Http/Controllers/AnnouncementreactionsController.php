<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Announcementreactions};
use App\Http\Requests\StoreAnnouncementreactionsRequest;
use App\Http\Requests\UpdateAnnouncementreactionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AnnouncementreactionsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('announcementreactions.announcementreactions', [
            'announcementreactions' => Announcementreactions::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('announcementreactions.trash-announcementreactions', [
            'announcementreactions' => Announcementreactions::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($announcementreactionsId)
    {
        Announcementreactions::where('id', $announcementreactionsId)->update(['isTrash' => '0']);

        return redirect('/announcementreactions');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcementreactions.create-announcementreactions');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($announcements_id)
    {
        $users_id = Auth::id(); // cleaner

        $alreadyReacted = Announcementreactions::where('announcements_id', $announcements_id)
            ->where('users_id', $users_id)
            ->exists();

        if ($alreadyReacted) {
            return back()->with('info', 'You already reacted to this announcement.');
        }

        Announcementreactions::create([
            'announcements_id' => $announcements_id,
            'users_id' => $users_id
        ]);

        return back()->with('success', 'Reaction added successfully!');
    }

    public function remove($announcements_id)
    {
        $users_id = Auth::id();

        $deleted = Announcementreactions::where('announcements_id', $announcements_id)
            ->where('users_id', $users_id)
            ->delete();

        if ($deleted) {
            return back()->with('success', 'Reaction removed successfully!');
        }

        return back()->with('info', 'No reaction found to remove.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcementreactions $announcementreactions, $announcementreactionsId)
    {
        return view('announcementreactions.show-announcementreactions', [
            'item' => Announcementreactions::where('id', $announcementreactionsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcementreactions $announcementreactions, $announcementreactionsId)
    {
        return view('announcementreactions.edit-announcementreactions', [
            'item' => Announcementreactions::where('id', $announcementreactionsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementreactionsRequest $request, Announcementreactions $announcementreactions, $announcementreactionsId)
    {
        $announcementreactions = Announcementreactions::findOrFail($announcementreactionsId);

        $announcementreactions->announcements_id = $request->announcements_id;
        $announcementreactions->users_id = $request->users_id;

        $announcementreactions->save();

        return back()->with('success', 'Announcementreactions Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Announcementreactions $announcementreactions, $announcementreactionsId)
    {
        return view('announcementreactions.delete-announcementreactions', [
            'item' => Announcementreactions::where('id', $announcementreactionsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcementreactions $announcementreactions, $announcementreactionsId)
    {

        Announcementreactions::where('id', $announcementreactionsId)->update(['isTrash' => '1']);

        return redirect('/announcementreactions');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $announcementreactions = Announcementreactions::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('announcementreactions.announcementreactions', compact('announcementreactions', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the announcementreactions based on the 'paginate' value
        $announcementreactions = Announcementreactions::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated announcementreactions
        return view('announcementreactions.announcementreactions', compact('announcementreactions'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for announcementreactions
        $query = Announcementreactions::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $announcementreactions = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all announcementreactions without filtering
            $announcementreactions = $query->paginate(10);
        }

        // Return the view with announcementreactions and the selected date range
        return view('announcementreactions.announcementreactions', compact('announcementreactions', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementreactions::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementreactions::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Announcementreactions::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}