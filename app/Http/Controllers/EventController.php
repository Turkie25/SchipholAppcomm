<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $duration = $request->get('duration');

        // Filter events based on duration (exact match)
        $events = Event::where('duration', $duration)->get();
        dump($events);

        return response()->json($events);
    }

    public function create()
    {
        return Inertia::render('Dashboard/Events/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'duration' => 'required',
            'capacity' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Event::create($validated);

        return Redirect::route('dashboard.events.create')->with('success', 'Event created successfully.');
    }
}
