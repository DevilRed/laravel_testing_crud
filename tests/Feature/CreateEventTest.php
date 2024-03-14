<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Carbon\Carbon;

class CreateEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function event_can_be_created_successfully(): void
    {
        $data = [
            'name' => 'namextut',
            'featured' => 'mem.jpg',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'toto'
        ];
        $response = $this->post('/events', $data);

        $response->assertStatus(302);
        $this->assertDatabaseHas('events', $data);
    }
}
