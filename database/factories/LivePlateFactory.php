<?php

namespace Database\Factories;

use App\Models\LivePlate;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivePlateFactory extends Factory
{
    protected $model = LivePlate::class;

    protected $malaysianStates = [
        'Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang',
        'Perak', 'Perlis', 'Pulau Pinang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu'
    ];

    public function definition()
    {
        $alphabetStart = $this->faker->randomLetter();
        $alphabetEnd = $this->faker->randomLetter();
        $categories = [
            'Golden Number' => $this->faker->numberBetween(0, 9),
            '2 Digit' => $this->faker->numberBetween(10, 99),
            '3 Digit' => $this->faker->numberBetween(100, 999),
            '4 Digit' => $this->faker->numberBetween(1000, 9999)
        ];

        $category = $this->faker->randomElement(array_keys($categories));
        $number = $categories[$category];
        $plate = $alphabetStart . $number . $alphabetEnd;

        // Randomly select a Malaysian state
        $state = $this->faker->randomElement($this->malaysianStates);

        return [
            'state' => $state,
            'plate' => $plate,
            'end_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
