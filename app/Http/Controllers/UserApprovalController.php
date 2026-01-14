<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApprovalController extends Controller
{
    public function approveUser($userId)
    {
        User::where('id', $userId)->update(['isApproved' => 1]);

        return back()->with('success', 'User Approved');
    }

    public function disapproveUser($userId)
    {
        User::where('id', $userId)->update(['isApproved' => 0]);

        return back()->with('success', 'User Disapproved');
    }
}
