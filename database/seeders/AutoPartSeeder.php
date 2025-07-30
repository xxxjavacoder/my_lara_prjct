<?php

namespace Database\Seeders;

use App\Models\Auto;
use App\Models\Part;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autos = Auto::all();
        $parts = Part::all();

        // Для кожного авто прив'язати випадкові 2–5 запчастин
        foreach ($autos as $auto) {
            $randomParts = $parts->random(rand(2, 5))->pluck('id')->toArray();
            $auto->parts()->syncWithoutDetaching($randomParts);
        }
    }
}
