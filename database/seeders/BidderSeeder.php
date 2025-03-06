<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bidder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bidder::create([
            'first_name' => 'Wilson',
            'last_name' => 'Fisk',
            'address' => '123 Main St, Cityville',
            'email' => 'fiskwilson@example.com'
        ]);

        Bidder::create([
            'first_name' => 'Frank',
            'last_name' => 'Castle',
            'address' => '456 Oak St, Townsville',
            'email' => 'frankcastle@mail.com'
        ]);

        Bidder::create([
            'first_name' => 'Matt',
            'last_name' => 'Murdock',
            'address' => '789 Pine St, Villageville',
            'email' => 'mattmurdock@mail.com'
        ]);

        Bidder::create([
            'first_name' => 'Raymart',
            'last_name' => 'Magallanes',
            'address' => 'Poblacion, Sagbayan, Bohol',
            'email' => 'magallanesraymart@mail.com'
        ]);

        Bidder::create([
            'first_name' => 'Benito',
            'last_name' => 'Maglaway',
            'address' => 'Cabulijan, Tubigon, Bohol',
            'email' => 'maglawaybenito@mail.com'
        ]);
    }
}
