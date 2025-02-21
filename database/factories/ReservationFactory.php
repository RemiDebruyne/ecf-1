<?php

namespace Database\Factories;

use App\Models\Timeslot;
use App\Models\Client;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $clientId = Client::inRandomOrder()->first()->id;
        $timeSlotId = Timeslot::inRandomOrder()->first()->id;
        $courseId = Course::inRandomOrder()->first()->id;

        return [
            'reservation_date' => fake()->date('d-m-Y'),
            'client_id' => $clientId,
            'timeslot_id' => $timeSlotId,
            'course_id' => $courseId,
        ];
    }
}
