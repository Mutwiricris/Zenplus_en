<?php

namespace Database\Seeders;

use App\Models\Eventdata;
use App\Models\EventType;
use Illuminate\Database\Seeder;

class EventdataSeeder extends Seeder
{
    public function run()
    {
        // Create 5 event types
        EventType::factory()->count(5)->create()->each(function ($eventType) {
            // Create 10 events for each event type
            Eventdata::factory()->count(10)->create(['event_type_id' => $eventType->id]);
        });
    }
}