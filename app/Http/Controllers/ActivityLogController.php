<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $activityLogs = ActivityLog::with('user')
            ->when($search, function ($query) use ($search) {

                $query->where('activity', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($q) use ($search) {

                        $q->where('name', 'like', "%{$search}%");

                    });

            })
            ->latest()
            ->paginate(10);

        return view('activity_logs.index', compact('activityLogs'));
    }
}