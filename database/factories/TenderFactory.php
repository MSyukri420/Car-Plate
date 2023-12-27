<?php

namespace Database\Factories;

use App\Models\Tender;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenderFactory extends Factory
{
    protected $model = Tender::class;

    protected $malaysianStates = [
        'Johor', 'Kedah', 'Kelantan', 'Melaka', 'Negeri Sembilan', 'Pahang',
        'Perak', 'Perlis', 'Pulau Pinang', 'Sabah', 'Sarawak', 'Selangor', 'Terengganu'
    ];

    public function definition()
    {
        $alphabetStart = $this->faker->randomLetter;
        $alphabetStartLength = $this->faker->numberBetween(1, 3);
        if ($alphabetStartLength > 1) {
            $alphabetStart .= $this->faker->randomLetter($alphabetStartLength - 1);
        }
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
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

