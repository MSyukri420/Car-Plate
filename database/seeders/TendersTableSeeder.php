<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Tender;

class TendersTableSeeder extends Seeder
{
    public function run()
    {
        // Create 10 Tender records using the factory
        Tender::factory()->count(50)->create();
    }
}
