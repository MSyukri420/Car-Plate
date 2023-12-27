<?php

namespace Database\Factories;

use App\Models\CarPlate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarPlateFactory extends Factory
{
    protected $model = CarPlate::class;

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
        $carplate = $alphabetStart . $number . $alphabetEnd;

        return [
            'category' => $category,
            'alphabet_start' => $alphabetStart,
            'alphabet_end' => $alphabetEnd,
            'number' => $number,
            'carplate' => $carplate,
            'price' => $this->faker->numberBetween(10000, 99999),
        ];
    }
}

