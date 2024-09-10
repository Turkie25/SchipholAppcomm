<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        $flightDate = $this->faker->date;

        // Randomly generate a transit duration between 4 and 24 hours
        $transitHours = $this->faker->numberBetween(4, 24);
//        $transitMinutes = $this->faker->numberBetween(0, 59);

        // Generate arrival and departure times with the calculated transit duration
        $arrivalTime = Carbon::parse($this->faker->time);
        $departureTime = $arrivalTime->copy()->addHours($transitHours);

        $flightOneCity = $this->faker->city;
        $flightTwoCity = $this->faker->city;

        return [
            'user_id' => $this->userExists() ? Auth::id() : null, // Only assign user_id if a user is logged in
            'flight_number' => $this->faker->bothify('??##'), // Example flight number
            'flight_date' => $flightDate,
            'arrival_time' => $arrivalTime->format('H:i:s'),
            'departure_time' => $departureTime->format('H:i:s'),
            'transit_duration' => $transitHours, // Transit duration in hours
            'flight_one_name' => 'Flight to ' . $flightOneCity, // Flight one name
            'flight_one_location' => $flightOneCity, // Flight one location
            'flight_two_name' => 'Flight to ' . $flightTwoCity, // Flight two name
            'flight_two_location' => $flightTwoCity, // Flight two location
        ];
    }

    private function userExists()
    {
        return Auth::check();
    }
}
