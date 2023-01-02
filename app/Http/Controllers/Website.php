<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;        // add

class Website extends Controller
{
    public function index(Request $request) {
        $countries = DB::table('countries')->OrderBy('country_name')->get();
        return view('index', compact('countries'));
    }

    public function getState(Request $request) {
        // echo 'asdfdfff';
        //$country_id = $request->post('country_id');
        $country_id = $request->country_id;
        //echo $country_id;
        $states = DB::table('states')->where('country_id', $country_id)->OrderBy('state_name')->get();
        //print_r($states);
        $html = '<option value="">Select State</option>';
        foreach($states as $state) {
            $html .= '<option value="'. $state->id .'">' . $state->state_name . '</option>';
        }
        // echo $html;
        return $html;
    }

    public function getCity(Request $request) {
        // echo 'asdfdfff';
        $state_id = $request->post('state_id');
        //echo $state_id;
        $cities = DB::table('cities')->where('state_id', $state_id)->OrderBy('city_name')->get();
        //print_r($cities);
        $html = '<option value="">Select City</option>';
        foreach($cities as $city) {
            $html .= '<option value="'.$city->id.'">' . $city->city_name . '</option>';
        }
        // echo $html;
        return $html;
    }
}
