<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Time;
use App\Models\Rest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RestTableSeeder::class);// \App\Models\User::factory(10)->create();
    }
}
