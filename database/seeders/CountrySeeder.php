<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Path to the JSON file
        $json = File::get(base_path('database/data/countries.json'));
        $countries = json_decode($json);

        foreach ($countries as $country) {
            Country::firstOrCreate([
                'name' => $country->name
            ]);
        }
    }
}
