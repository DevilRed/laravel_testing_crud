<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use Carbon\Carbon;

class DeleteEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function event_is_deleted(): void
    {
        $event = Event::create([
            'name' => 'to update',
            'featured' => 'mem.jpg',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'toto'
        ]);
        $response = $this->delete('/events/' . $event->id);

        $response->assertStatus(204);// expect response without content
        $this->assertDatabaseMissing('events', ['id' => $event->id]);
    }
}
