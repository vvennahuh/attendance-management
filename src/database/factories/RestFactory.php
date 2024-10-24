<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Time;
use App\Models\Rest;

class RestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dummyDate = $this->faker->dateTimeThisMonth;
        return [
            'start' => $dummyDate->format('H:i:s'),
            'end' => $dummyDate->modify('+1hour')->format('H:i:s'),
            'time_id' => function () {
                return Time::factory()->create()->id;
            },
            //
        ];
    }
}
