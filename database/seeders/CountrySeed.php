<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            
            ['id' => 1, 'shortcode' => 'KS', 'name' => 'Kepulauan Seribu',],
            ['id' => 2, 'shortcode' => 'JB', 'name' => 'Jakarta Barat',],
            ['id' => 3, 'shortcode' => 'JP', 'name' => 'Jakarta Pusat',],
            ['id' => 4, 'shortcode' => 'JS', 'name' => 'Jakarta Selatan',],
            ['id' => 5, 'shortcode' => 'JT', 'name' => 'Jakarta Timur',],
            ['id' => 6, 'shortcode' => 'JU', 'name' => 'Jakarta Utara',],
        ];

        Country::insert($countries);
    }
}
