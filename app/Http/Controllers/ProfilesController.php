<?php

namespace App\Http\Controllers;

use App\Models\{Logs, Profiles};
use App\Http\Requests\StoreProfilesRequest;
use App\Http\Requests\UpdateProfilesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfilesController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // check if user has profile

        $user = Profiles::where('users_id', Auth::id())->first();

        if ($user) {
            return redirect('show-profiles/'. $user->id);
        }

        return view('profiles.profiles', [
            'profiles' => Profiles::where('isTrash', '0')->paginate(10)
        ]);
    }

    public function trash()
    {
        return view('profiles.trash-profiles', [
            'profiles' => Profiles::where('isTrash', '1')->paginate(10)
        ]);
    }

    public function restore($profilesId)
    {
        Profiles::where('id', $profilesId)->update(['isTrash' => '0']);

        return redirect('/profiles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create-profiles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfilesRequest $request)
    {
        Profiles::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'departments_id' => $request->departments_id,
            'year' => $request->year,
            'birthdate' => $request->birthdate,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'mothersname' => $request->mothersname,
            'fathersname' => $request->fathersname,
            'emergency_contact' => $request->emergency_contact,
            'users_id' => Auth::user()->id
        ]);

        return back()->with('success', 'Profiles Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profiles $profiles, $profilesId)
    {
        return view('profiles.show-profiles', [
            'item' => Profiles::where('id', $profilesId)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profiles $profiles, $profilesId)
    {
        return view('profiles.edit-profiles', [
            'item' => Profiles::where('id', $profilesId)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilesRequest $request, Profiles $profiles, $profilesId)
    {
        $profiles = Profiles::findOrFail($profilesId);

        $profiles->firstname = $request->firstname;
        $profiles->lastname = $request->lastname;
        $profiles->gender = $request->gender;
        $profiles->departments_id = $request->departments_id;
        $profiles->year = $request->year;
        $profiles->birthdate = $request->birthdate;
        $profiles->phonenumber = $request->phonenumber;
        $profiles->address = $request->address;
        $profiles->mothersname = $request->mothersname;
        $profiles->fathersname = $request->fathersname;
        $profiles->emergency_contact = $request->emergency_contact;

        $profiles->save();

        return back()->with('success', 'Profiles Updated Successfully!');
    }

    /**
     * Show the form for deleting the specified resource.
     */
    public function delete(Profiles $profiles, $profilesId)
    {
        return view('profiles.delete-profiles', [
            'item' => Profiles::where('id', $profilesId)->first()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profiles $profiles, $profilesId)
    {

        Profiles::where('id', $profilesId)->update(['isTrash' => '1']);

        return redirect('/profiles');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        // Perform the search logic
        $profiles = Profiles::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->paginate(10);

        return view('profiles.profiles', compact('profiles', 'search'));
    }

    public function paginate(Request $request)
    {

        // Retrieve the 'paginate' parameter from the URL (e.g., ?paginate=10)
        $paginate = $request->input('paginate', 10); // Default to 10 if no paginate value is provided

        // Paginate the profiles based on the 'paginate' value
        $profiles = Profiles::paginate($paginate); // Paginate with the specified number of items per page

        // Return the view with the paginated profiles
        return view('profiles.profiles', compact('profiles'));
    }

    public function filter(Request $request)
    {
        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Retrieve 'from' and 'to' dates from the URL
        $from = $request->input('from');
        $to = $request->input('to');

        // Default query for profiles
        $query = Profiles::query();

        // Convert dates to Carbon instances for better comparison
        $fromDate = $from ? Carbon::parse($from)->startOfDay() : null;
        $toDate = $to ? Carbon::parse($to)->endOfDay() : null;

        // Check if both 'from' and 'to' dates are provided
        if ($fromDate && $toDate) {
            // Ensure correct date filtering with full day range
            $profiles = $query->whereBetween('created_at', [$fromDate, $toDate])
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);
        } else {
            // If 'from' or 'to' are missing, show all profiles without filtering
            $profiles = $query->paginate(10);
        }

        // Return the view with profiles and the selected date range
        return view('profiles.profiles', compact('profiles', 'from', 'to'));
    }

    public function bulkDelete(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Profiles::find($value);
            $deletable->delete();
        }
        return response()->json("Deleted");
    }

    public function bulkMoveToTrash(Request $request) {

        foreach ($request->ids as $value) {

            $deletable = Profiles::find($value);
            $deletable->update(['isTrash' => '1']);
        }
        return response()->json("Deleted");
    }

    public function bulkRestore(Request $request)
    {
        foreach ($request->ids as $value) {

            $restorable = Profiles::find($value);
            $restorable->update(['isTrash' => '0']);
        }
        return response()->json("Restored");
    }
}