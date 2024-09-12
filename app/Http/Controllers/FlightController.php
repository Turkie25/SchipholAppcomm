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

}