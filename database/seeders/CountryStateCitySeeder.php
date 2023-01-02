<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state_id = 0;
        $city_id = 0;
        for($i = 1; $i <= 5; $i++) {
            Country::create([
                'country_name' => 'Country ' . $i
            ]);
            $country_id = $i;
            for($j = 1; $j <= 3; $j++) {
                $state_id++;
                State::create([
                    'state_name' => 'State ' . $state_id .' of country ' . $i,
                    'country_id' => $i
                ]);
                for($k = 1; $k <= 3; $k++) {
                    $city_id++;
                    City::create([
                        'city_name' => 'City ' . $city_id . ' of state ' . $state_id . ' of country ' . $i,
                        'state_id' => $state_id
                    ]);
                }
            }
        }
    }
}
