<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Departments};
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DepartmentsController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('departments.departments', [
            'departments' => Departments::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('departments.trash-departments', [
            'departments' => Departments::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($departmentsId)
    {
        Departments::where('id', $departmentsId)->update(['isTrash' => '0']);

        return redirect('/departments');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create-departments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentsRequest $request)
    {
        Departments::create(['name' => $request->name]);

        return back()->with('success', 'Departments Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departments $departments, $departmentsId)
    {
        return view('departments.show-departments', [
            'item' => Departments::where('id', $departmentsId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departments $departments, $departmentsId)
    {
        return view('departments.edit-departments', [
            'item' => Departments::where('id', $departmentsId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentsRequest $request, Departments $departments, $departmentsId)
    {
        $departments = Departments::findOrFail($departmentsId);

        $departments->name = $request->name;

        $departments->save();

        return back()->with('success', 'Departments Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Departments $departments, $departmentsId)
    {
        return view('departments.delete-departments', [
            'item' => Departments::where('id', $departmentsId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departments $departments, $departmentsId)
    {

        Departments::where('id', $departmentsId)->update(['isTrash' => '1']);

        return redirect('/departments');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $departments = Departments::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('departments.departments', compact('departments', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the departments based on the 'paginate' value
        $departments = Departments::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated departments
        return view('departments.departments', compact('departments'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for departments
        $query = Departments::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $departments = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all departments without filtering
            $departments = $query->paginate(10);
        }

        // Return the view with departments and the selected date range
        return view('departments.departments', compact('departments', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Departments::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Departments::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Departments::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}