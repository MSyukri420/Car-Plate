<?php

namespace Database\Seeders;
use App\Models\CarPlate;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarPlatesTableSeeder extends Seeder
{
    public function run()
    {
        CarPlate::factory()->count(200)->create();
    }
}
