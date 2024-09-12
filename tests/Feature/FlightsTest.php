<?php

namespace Tests\Feature;


use App\Models\Flight;
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
}
