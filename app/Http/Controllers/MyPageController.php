<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Services\MyPageService;


class MyPageController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        $events = $user->events;
        $fromTodayEvents = MyPageService::reservedEvent($events, 'fromToday');
        $pastEvents = MyPageService::reservedEvent($events, 'past');
        

        // dd($user, $events, $fromTodayEvents, $pastEvents);

        return view('mypage/index', 
        compact('fromTodayEvents', 'pastEvents'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $reservation = Reservation::where('user_id', '=', Auth::id() )
        ->where('event_id', '=', $id)
        ->first();

        return view('mypage/show', compact('event', 'reservation'));
    }
}
