<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Carbon\Carbon;
use App\Models\Event;

class UpdateEventTest extends TestCase
{
    use RefreshDatabase;

    protected $event;

    /**
    * @test
    */
    public function can_update_an_event(): void
    {
        $this->event = Event::create([
            'name' => 'to update',
            'featured' => 'mem.jpg',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'toto'
        ]);
        $update = [
            'name' => 'Event updated'
        ];
        $response = $this->put('/events/' . $this->event->id, $update);

        $response->assertStatus(200);
        $this->assertDatabaseHas('events', $update);
    }
}
