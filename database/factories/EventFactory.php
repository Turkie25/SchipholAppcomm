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
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'location' => $this->faker->city,
            'duration' => $this->faker->numberBetween(1, 24),
            'capacity' => $this->faker->numberBetween(1, 100),
            'start_time' => $this->faker->time,
            'end_time' => Carbon::now()->addHours($this->faker->numberBetween(1, 24)),
        ];
    }
}
