<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventService 
{
    public static function checkEventDuplication($eventDate, $startTime, $endTime)
    {
        return DB::table('events')
        ->wheredate('start_date', $eventDate)
        ->wheretime('end_date', '>',$startTime)
        ->wheretime('start_date', '<', $endTime)
        ->exists();
    }

    public static function countEventDuplication($eventDate, $startTime, $endTime)
    {
        return DB::table('events')
        ->wheredate('start_date', $eventDate)
        ->wheretime('end_date', '>',$startTime)
        ->wheretime('start_date', '<', $endTime)
        ->count();
    }

    public static function joinDateAndTime($date, $time)
    {
        $join = $date. " " . $time;
        return Carbon::createFromFormat('Y-m-d H:i', $join);
    }
}

