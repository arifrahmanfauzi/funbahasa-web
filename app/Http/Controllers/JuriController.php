<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventPost;
use App\Models\EventUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuriController extends Controller
{
    public function index()
    {
        return 'echo';
    }

    public function event()
    {
        $event = EventUser::all()->where('users_id', Auth::id());
        return view('Juri.event',compact('event'));
    }

    public function eventShow(Event $event)
    {
        $data = EventPost::all()->where('event_id', $event->id);
        return view('juri.karya',compact('data'));
    }

    public function profile()
    {
        return view('profile');
    }
}
