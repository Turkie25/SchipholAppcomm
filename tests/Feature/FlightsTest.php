<?php

namespace Tests\Feature;


use App\Models\Event;
use App\Models\Flight;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FlightsTest extends TestCase
{

    use refreshDatabase;
    /**
     * A basic test example.
     */

    /** @test */
    public function TestcanReturnAllTheFlights(): void
    {
        //given we have a flight in the database
        $flight = Flight::factory()->count(5)->create();

        //when we hit the endpoint
        $response = $this->get('/api/flights');

        //then we should receive a 200 status
        $response = $this->get('/api/flights');
        $response->assertStatus(200);

//        dump($response->json());


    }

    public function testEventsWillBeFilteredOnTransitDuration(): void
    {
        // Given we have events and flights in the database
        $event1 = Event::factory()->create([
            'start_time' => now()->addHours(1),
            'end_time' => now()->addHours(2),
        ]);

        $event2 = Event::factory()->create([
            'start_time' => now()->addHours(5),
            'end_time' => now()->addHours(6),
        ]);

        $flight = Flight::factory()->create([
            'arrival_time' => now()->subHours(6)->format('H:i:s'),
            'departure_time' => now()->addHours(6)->format('H:i:s'),
            'transit_duration' => 4, // Transit duration in hours
        ]);

        // When we hit the endpoint with a transit duration filter
        $response = $this->get('/api/flights?transit_duration=4');

        // Dump the full response for debugging
        $response->dump();

        // Assert the response status
        $response->assertStatus(200);

        // Check the response structure
        $flights = $response->json();

        // Dump the structure to confirm
//        dd($event1, $event2);

        // Ensure flights is an array
        $this->assertIsArray($flights);

        // Calculate the expected events based on the transit duration and buffer
        $buffer = 2; // 2-hour buffer
        $filteredEvents = Event::filterByTransitDuration(4, $buffer)->pluck('id')->toArray(); // Filter events based on duration and buffer

        foreach ($flights as $flight) {
            $transitEnd = Carbon::parse($flight['arrival_time'])->addHours($flight['transit_duration'] + $buffer);
            $eventsInRange = Event::whereBetween('start_time', [now(), $transitEnd])->get();

            foreach ($eventsInRange as $event) {
                $this->assertTrue(in_array($event->id, $filteredEvents));
            }
        }

    }


}
