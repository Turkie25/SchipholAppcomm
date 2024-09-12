<?php

namespace Database\Factories;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {

        $locations = [
            'Stop 1',
            'Stop 2',
            'Stop 3',
            'Stop 4',
            'Stop 5',
            'Stop 6',
        ];

//        $startTime = $this->faker->randomElement($startTimes);
        $location = $this->faker->randomElement($locations);

        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->text,
            'location' => $location,
            'duration' => $this->faker->numberBetween(30, 120), // Duration in minutes, not too long
            'capacity' => $this->faker->numberBetween(10, 50), // Adjust capacity as needed
            'start_time' => $startTime = $this->faker->time('H:i:s'),
            'end_time' => Carbon::createFromFormat('H:i:s', $startTime)
                ->addMinutes($this->faker->numberBetween(30, 120)) // Duration should match
                ->format('H:i:s'),
        ];
    }
}
