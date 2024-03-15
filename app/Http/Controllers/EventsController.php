<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventsController extends Controller
{
    public function store(StoreEventRequest $request): RedirectResponse
    {
        $event = $request->all();
        Event::create($event);
        return redirect()->route('events.index');
    }

    public function index(): View
    {
        $events = Event::all();
        return view('events.index', ['events' => $events]);
    }
}
