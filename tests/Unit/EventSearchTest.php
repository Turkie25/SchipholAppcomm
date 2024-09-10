<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventSearchTest extends TestCase
{
    use RefreshDatabase; // To ensure a fresh database state for each test

    /** @test */
    public function testCanSearchEventsByDuration()
    {
        // Arrange: Create test Events
        $eventOne = Event::create([
            'name' => 'Event One',
            'description' => 'Description for Event One',
            'location' => 'Location One',
            'duration' => '02:00:00', // Use HH:MM:SS format
            'capacity' => 100,
            'start_time' => now()->addDay(),
            'end_time' => now()->addDay()->addHours(2),
        ]);

        $eventTwo = Event::create([
            'name' => 'Event Two',
            'description' => 'Description for Event Two',
            'location' => 'Location Two',
            'duration' => '04:00:00', // Use HH:MM:SS format
            'capacity' => 200,
            'start_time' => now()->addDays(2),
            'end_time' => now()->addDays(2)->addHours(4),
        ]);

//        dump(Event::all());

        // Assert that Events are created
        $this->assertDatabaseHas('Events', [
            'name' => 'Event One',
            'duration' => '02:00:00'
        ]);

        $this->assertDatabaseHas('Events', [
            'name' => 'Event Two',
            'duration' => '04:00:00',
        ]);



        // Act: Search for Events with a duration of '04:00:00'
        $response = $this->json('GET', '/api/Events', ['duration' => '02:00:00']);

        // Assert: Check if the correct event is returned
        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'Event One',
                'duration' => '02:00:00',
            ]);
//        $response->dump();

    }

/** @test */
    public function testCanSearchEventsByFlightNumberAndTransitDuration()
    {
        // Arrange: Create test Events
        $eventOne = Event::create([
            'name' => 'Event One',
            'description' => 'Description for Event One',
            'location' => 'Location One',
            'duration' => '03:00:00', // Use HH:MM:SS format
            'capacity' => 100,
            'start_time' => now()->addDay(),
            'end_time' => now()->addDay()->addHours(2),
        ]);

        $eventTwo = Event::create([
            'name' => 'Event Two',
            'description' => 'Description for Event Two',
            'location' => 'Location Two',
            'duration' => '04:00:00', // Use HH:MM:SS format
            'capacity' => 200,
            'start_time' => now()->addDays(2),
            'end_time' => now()->addDays(2)->addHours(4),
        ]);

        // Act: Search for Events that fit within the transit duration of a flight
        $flightNumber = 'AB12'; // Example flight number
        $transitDuration = '08:00:00'; // Example transit duration
        $response = $this->json('GET', '/api/Events', [
            'flight_number' => $flightNumber,
            'transit_duration' => $transitDuration,
        ]);

        // Act: Search for Events with a duration of '04:00:00'
        $response = $this->json('GET', '/api/Events', ['duration' => '03:00:00']);

        // Assert: Check if the correct event is returned
        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => 'Event One',
                'duration' => '03:00:00',
            ]);
    }



//    public function testCanSearchEventsByDuration()
//    {
//        // Arrange: Create test Events
//        Event::create([
//            'name' => 'Event One',
//            'duration' => '2 hours',
//            // other attributes...
//        ]);
//
//        Event::create([
//            'name' => 'Event Two',
//            'duration' => '4 hours',
//            // other attributes...
//        ]);
//
//        // Act: Search for Events with a duration of '4 hours'
//        $response = $this->json('GET', '/api/Events', ['duration' => '4 hours']);
//
//        // Assert: Check if the correct event is returned
//        $response->assertStatus(200)
//            ->assertJsonFragment([
//                'name' => 'Event Two',
//                'duration' => '4 hours',
//            ]);
//    }

}
