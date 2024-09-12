<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index(): \Illuminate\Http\JsonResponse
    {
        $flights = Flight::all();
        return response()->json($flights);
    }

    public function getFlights()
    {
        // Fetch flight data from the database
        $flights = Flight::all(['flight_number', 'flight_one_name']);

        // Return data as JSON
        return response()->json($flights);
    }

}