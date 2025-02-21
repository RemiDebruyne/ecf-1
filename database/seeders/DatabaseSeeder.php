<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Reservation;
use App\Models\Timeslot;
use App\Models\User;
use App\Models\Client;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Collator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Admin::factory(3)->create();
        Client::factory(17)->create();
        Course::factory(20)->create();
        Timeslot::factory(20)->create();
        Reservation::factory(40)->create();
    }
}
