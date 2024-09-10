<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventSearchController extends Controller
{
    public function search(Request $request): \Illuminate\Http\JsonResponse
    {
        $duration = $request->query('duration');
        $events = Event::where('duration', $duration)->get();
        return response()->json($events);
    }
}
