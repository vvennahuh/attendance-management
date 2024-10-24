<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Time;

class TimeFactory extends Factory
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
            'date' => $dummyDate->format('Y-m-d'),
            'start' => $dummyDate->format('H:i:s'),
            'end' => $dummyDate->modify('+9hour')->format('H:i:s'),
            'user_id' => function () {
                return User::factory()->create()->id;
            },    //
        ];
    }
}
