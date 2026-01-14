<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Announcements};
use App\Http\Requests\StoreAnnouncementsRequest;
use App\Http\Requests\UpdateAnnouncementsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Smark\Smark\File;

class AnnouncementsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('announcements.announcements', [
            'announcements' => Announcements::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function details($announcementsId)
    {
        return view('announcement-details', [
            'item' => Announcements::where('id', $announcementsId)->first()
        ]);
    }

    public function trash()
    {
        return view('announcements.trash-announcements', [
            'announcements' => Announcements::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($announcementsId)
    {
        Announcements::where('id', $announcementsId)->update(['isTrash' => '0']);

        return redirect('/announcements');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create-announcements');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementsRequest $request)
    {

        $filename = '';
        if (isset($request->attachment_path)) {
            File::upload($request->attachment_path, 'announcements');
            $filename = File::$filename;
        }

        Announcements::create([
            'departments_id' => $request->departments_id,
            'semester' => $request->semester,
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'category' => $request->category,
            'attachment_path' => $filename,
            'published_at' => $request->published_at,
            'expires_at' => $request->expires_at,
            'status' => $request->status,
            'users_id' => Auth::user()->id
        ]);

        return back()->with('success', 'Announcements Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcements $announcements, $announcementsId)
    {
        return view('announcements.show-announcements', [
            'item' => Announcements::where('id', $announcementsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcements $announcements, $announcementsId)
    {
        return view('announcements.edit-announcements', [
            'item' => Announcements::where('id', $announcementsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementsRequest $request, Announcements $announcements, $announcementsId)
    {
        $announcements = Announcements::findOrFail($announcementsId);

        // Handle file upload
        if ($request->hasFile('attachment_path')) {
            // Delete old file if exists
            if ($announcements->attachment_path && file_exists('storage/announcements/' . $announcements->attachment_path)) {
                unlink('storage/announcements/' . $announcements->attachment_path);
            }

            // Upload new file
            File::upload($request->file('attachment_path'), 'announcements');
            $announcements->attachment_path = File::$filename;
        }

        $announcements->departments_id = $request->departments_id;
        $announcements->semester = $request->semester;
        $announcements->title = $request->title;
        $announcements->slug = $request->slug;
        $announcements->content = $request->content;
        $announcements->category = $request->category;
        $announcements->published_at = $request->published_at;
        $announcements->expires_at = $request->expires_at;
        $announcements->status = $request->status;
        $announcements->users_id = Auth::user()->id;

        $announcements->save();

        return back()->with('success', 'Announcement Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Announcements $announcements, $announcementsId)
    {
        return view('announcements.delete-announcements', [
            'item' => Announcements::where('id', $announcementsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcements $announcements, $announcementsId)
    {

        Announcements::where('id', $announcementsId)->update(['isTrash' => '1']);

        return redirect('/announcements');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $announcements = Announcements::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('announcements.announcements', compact('announcements', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the announcements based on the 'paginate' value
        $announcements = Announcements::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated announcements
        return view('announcements.announcements', compact('announcements'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for announcements
        $query = Announcements::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $announcements = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all announcements without filtering
            $announcements = $query->paginate(10);
        }

        // Return the view with announcements and the selected date range
        return view('announcements.announcements', compact('announcements', 'from', 'to'));
    }

    public function bulkDelete(Request $request)
    {
        foreach ($request->ids as $id) {
            $announcement = Announcements::find($id);

            if ($announcement) {
                // Delete attached file if exists
                if ($announcement->attachment_path && file_exists('storage/announcements/' . $announcement->attachment_path)) {
                    unlink('storage/announcements/' . $announcement->attachment_path);
                }

                // Delete record permanently
                $announcement->delete();
            }
        }

        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcements::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Announcements::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}