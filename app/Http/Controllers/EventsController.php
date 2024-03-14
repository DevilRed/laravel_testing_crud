<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function store(Request $request)
    {
        $event = $request->all();
        Event::create($event);
        return redirect()->route('events.index');
    }
}
