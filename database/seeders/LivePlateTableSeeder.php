<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\LivePlate;

class LivePlateTableSeeder extends Seeder
{
    public function run()
    {
        LivePlate::factory()->count(10)->create();
    }
}
