<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activites = [
            'Yoga',
            'Pilates',
            'Musculation',
            'Cardio-training',
            'Zumba',
            'Body Pump',
            'Spinning',
            'Boxe',
            'CrossFit',
            'Aqua-gym',
            'Stretching',
            'Krav Maga',
            'Body Combat',
            'Tai Chi',
            'Renforcement musculaire',
            'Danse latine',
            'HIIT (High Intensity Interval Training)',
            'Abdos-fessiers',
            'Circuit training',
            'Marche rapide'
        ];

        return [
            'activity' => $activites[array_rand($activites)]
        ];
    }
}
