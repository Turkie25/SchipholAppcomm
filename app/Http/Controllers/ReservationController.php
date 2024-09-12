<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request, $event_id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number_of_people' => 'required|integer|min:1',
        ]);

        // Validate that the event exists
        $event = Event::findOrFail($event_id);

        // Create the reservation
        $reservation = Reservation::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'event_id' => $event->id,
            'number_of_people' => $validated['number_of_people'],
            'reservation_time' => $event->start_time,
        ]);

        return response()->json($reservation, 201);
    }
}
