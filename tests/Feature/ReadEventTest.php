<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use Carbon\Carbon;

class ReadEventTest extends TestCase
{
    /**
    * @test
    */
    public function can_display_list_of_events(): void
    {
        Event::create([
            'name' => 'Event 1',
            'featured' => 'meme.jpg',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'toto',
        ]);
        Event::create([
            'name' => 'Event 2',
            'featured' => 'meme.jpg',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'toto',
        ]);

        $response = $this->get('/events');

        $response->assertStatus(200);
        $response->assertSee('Event 1');
        $response->assertSee('Event 2');
    }
}
