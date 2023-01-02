<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 25; $i++) {
            if($i >= 1 && $i <= 3) {
                State::create([
                    'state_name' => 'State ' . $i .' of country 1',
                    'country_id' => '1'
                ]);
            }
            if($i >= 4 && $i <= 6) {
                State::create([
                    'state_name' => 'State ' . $i .' of country 2',
                    'country_id' => '2'
                ]);
            }
            if($i >= 7 && $i <= 9) {
                State::create([
                    'state_name' => 'State ' . $i .' of country 3',
                    'country_id' => '3'
                ]);
            }
            if($i >= 10 && $i <= 12) {
                State::create([
                    'state_name' => 'State ' . $i .' of country 4',
                    'country_id' => '4'
                ]);
            }
            if($i >= 13 && $i <= 15) {
                State::create([
                    'state_name' => 'State ' . $i .' of country 5',
                    'country_id' => '5'
                ]);
            }
        }
    }
}
