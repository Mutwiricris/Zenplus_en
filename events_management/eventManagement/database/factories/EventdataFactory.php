<?php

namespace Database\Factories;

use App\Models\Eventdata;
use App\Models\EventType;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventdataFactory extends Factory
{
    protected $model = Eventdata::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'location' => $this->faker->address,
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'description_title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'event_type_id' => EventType::factory(),
        ];
    }
}