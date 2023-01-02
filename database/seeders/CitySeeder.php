<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 45; $i++) {
            if($i >= 1 && $i <= 3) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 1',
                    'state_id' => '1'
                ]);
            }
            if($i >= 4 && $i <= 6) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 2',
                    'state_id' => '2'
                ]);
            }
            if($i >= 7 && $i <= 9) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 3',
                    'state_id' => '3'
                ]);
            }
            if($i >= 10 && $i <= 12) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 4',
                    'state_id' => '4'
                ]);
            }
            if($i >= 13 && $i <= 15) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 5',
                    'state_id' => '5'
                ]);
            }
            if($i >= 16 && $i <= 18) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 6',
                    'state_id' => '6'
                ]);
            }
            if($i >= 19 && $i <= 21) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 7',
                    'state_id' => '7'
                ]);
            }
            if($i >= 22 && $i <= 24) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 8',
                    'state_id' => '8'
                ]);
            }
            if($i >= 25 && $i <= 27) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 9',
                    'state_id' => '9'
                ]);
            }
            if($i >= 28 && $i <= 30) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 10',
                    'state_id' => '10'
                ]);
            }
            if($i >= 31 && $i <= 33) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 11',
                    'state_id' => '11'
                ]);
            }
            if($i >= 34 && $i <= 36) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 12',
                    'state_id' => '12'
                ]);
            }
            if($i >= 37 && $i <= 39) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 13',
                    'state_id' => '13'
                ]);
            }
            if($i >= 40 && $i <= 42) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 14',
                    'state_id' => '14'
                ]);
            }
            if($i >= 43 && $i <= 45) {
                City::create([
                    'city_name' => 'City ' . $i . ' of state 15',
                    'state_id' => '15'
                ]);
            }
        }
    }
}
