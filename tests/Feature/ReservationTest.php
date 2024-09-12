<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\Flight;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testThatUserCanMakeReservation(): void
    {
        // Given we have an event in the database
        $event = Event::factory()->create([
            'start_time' => now()->addHours(4), // Example start time
        ]);

        // When a user submits a reservation request
        $response = $this->post('/api/reservations/' . $event->id, [
            'name' => 'Johngrr Doe',
            'email' => 'johndoe@example.com',
            'number_of_people' => 2,
        ]);

        // Check if the reservation is stored in the database
        $this->assertDatabaseHas('reservations', [
            'name' => 'Johngrr Doe',
            'email' => 'johndoe@example.com',
            'event_id' => $event->id,
            'number_of_people' => 2,
            'reservation_time' => $event->start_time->format('H:i:s'),
        ]);

        // Assert the response status is 201 (created)
        $response->assertStatus(201);

        dump($response);
    }



//    public function TestcanReturnAllTheReservations(): void
//    {
//        //given we have a reservation in the database
//        $reservation = Flight::factory()->count(5)->create();
//
//        //when we hit the endpoint
//        $response = $this->get('/api/reservations');
//
//        //then we should receive a 200 status
//        $response = $this->get('/api/reservations');
//        $response->assertStatus(200);
//    }
}
