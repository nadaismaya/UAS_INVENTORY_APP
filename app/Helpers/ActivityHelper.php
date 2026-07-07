<?php

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

if (!function_exists('activity_log')) {

    function activity_log($aktivitas)
    {
        ActivityLog::create([
            'user_id'    => Auth::id(),
            'activity'   => $aktivitas,
            'ip_address' => request()->ip(),
        ]);
    }

}