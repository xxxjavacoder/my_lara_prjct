<?php

namespace Database\Seeders;

use App\Models\Auto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autos = [
            ['brand' => 'BMW', 'series' => '7 Series', 'model_code' => 'E38', 'year_start' => 1994, 'year_end' => 2002],
            ['brand' => 'BMW', 'series' => '7 Series', 'model_code' => 'E65', 'year_start' => 2003, 'year_end' => 2008],
            ['brand' => 'BMW', 'series' => '7 Series', 'model_code' => 'f01', 'year_start' => 2009, 'year_end' => 2014],
            ['brand' => 'BMW', 'series' => '7 Series', 'model_code' => 'g11', 'year_start' => 2015, 'year_end' => 2022],
            ['brand' => 'BMW', 'series' => '7 Series', 'model_code' => 'g70', 'year_start' => 2023, 'year_end' => 9999],
            ['brand' => 'BMW', 'series' => '5 Series', 'model_code' => 'E39', 'year_start' => 1995, 'year_end' => 2003],
            ['brand' => 'BMW', 'series' => '5 Series', 'model_code' => 'E60', 'year_start' => 2003, 'year_end' => 2010],
            ['brand' => 'BMW', 'series' => '5 Series', 'model_code' => 'F10', 'year_start' => 2010, 'year_end' => 2017],
            ['brand' => 'BMW', 'series' => '5 Series', 'model_code' => 'G30', 'year_start' => 2017, 'year_end' => 2023],
            ['brand' => 'BMW', 'series' => '5 Series', 'model_code' => 'G60', 'year_start' => 2024, 'year_end' => 9999],
            ['brand' => 'BMW', 'series' => '3 Series', 'model_code' => 'E46', 'year_start' => 1998, 'year_end' => 2006],
            ['brand' => 'BMW', 'series' => '3 Series', 'model_code' => 'E90', 'year_start' => 2005, 'year_end' => 2012],
            ['brand' => 'BMW', 'series' => '3 Series', 'model_code' => 'F30', 'year_start' => 2012, 'year_end' => 2019],
            ['brand' => 'BMW', 'series' => '3 Series', 'model_code' => 'G20', 'year_start' => 2019, 'year_end' => 9999],
        ];

        foreach ($autos as $item) {
            Auto::firstOrCreate([
                'brand' => $item['brand'],
                'series' => $item['series'],
                'model_code' => $item['model_code'],
            ], $item);
        }
    }
}
