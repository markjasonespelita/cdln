<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Announcementotherfiles};
use App\Http\Requests\StoreAnnouncementotherfilesRequest;
use App\Http\Requests\UpdateAnnouncementotherfilesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Smark\Smark\File;

class AnnouncementotherfilesController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('announcementotherfiles.announcementotherfiles', [
            'announcementotherfiles' => Announcementotherfiles::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('announcementotherfiles.trash-announcementotherfiles', [
            'announcementotherfiles' => Announcementotherfiles::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($announcementotherfilesId)
    {
        Announcementotherfiles::where('id', $announcementotherfilesId)->update(['isTrash' => '0']);

        return redirect('/announcementotherfiles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcementotherfiles.create-announcementotherfiles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementotherfilesRequest $request, $announcementsId)
    {

        $filename = '';
        if (isset($request->file)) {
            File::upload($request->file, 'announcementsOtherFiles');
            $filename = File::$filename;
        }

        Announcementotherfiles::create([
            'announcements_id' => $announcementsId,
            'users_id' => Auth::user()->id,
            'file' => $filename
        ]);

        return back()->with('success', 'Uploaded Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcementotherfiles $announcementotherfiles, $announcementotherfilesId)
    {
        return view('announcementotherfiles.show-announcementotherfiles', [
            'item' => Announcementotherfiles::where('id', $announcementotherfilesId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcementotherfiles $announcementotherfiles, $announcementotherfilesId)
    {
        return view('announcementotherfiles.edit-announcementotherfiles', [
            'item' => Announcementotherfiles::where('id', $announcementotherfilesId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementotherfilesRequest $request, Announcementotherfiles $announcementotherfiles, $announcementotherfilesId)
    {
        $announcementotherfiles = Announcementotherfiles::findOrFail($announcementotherfilesId);

        $announcementotherfiles->announcements_id = $request->announcements_id;
        $announcementotherfiles->users_id = $request->users_id;
        $announcementotherfiles->file = $request->file;

        $announcementotherfiles->save();

        return back()->with('success', 'Announcementotherfiles Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Announcementotherfiles $announcementotherfiles, $announcementotherfilesId)
    {
        return view('announcementotherfiles.delete-announcementotherfiles', [
            'item' => Announcementotherfiles::where('id', $announcementotherfilesId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcementotherfiles $announcementotherfiles, $announcementotherfilesId)
    {
        $fileRecord = Announcementotherfiles::findOrFail($announcementotherfilesId);

        $filePath = public_path('storage/announcementsOtherFiles/' . $fileRecord->file);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $fileRecord->delete();

        return back()->with('success', 'File deleted successfully.');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $announcementotherfiles = Announcementotherfiles::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('announcementotherfiles.announcementotherfiles', compact('announcementotherfiles', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the announcementotherfiles based on the 'paginate' value
        $announcementotherfiles = Announcementotherfiles::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated announcementotherfiles
        return view('announcementotherfiles.announcementotherfiles', compact('announcementotherfiles'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for announcementotherfiles
        $query = Announcementotherfiles::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $announcementotherfiles = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all announcementotherfiles without filtering
            $announcementotherfiles = $query->paginate(10);
        }

        // Return the view with announcementotherfiles and the selected date range
        return view('announcementotherfiles.announcementotherfiles', compact('announcementotherfiles', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementotherfiles::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Announcementotherfiles::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Announcementotherfiles::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}