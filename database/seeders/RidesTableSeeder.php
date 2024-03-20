<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ride;

class RidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ride::create([
            'Naam' => 'De heer Janssen',
            'status' => 'Geen speciale melding',
        ]);

        Ride::create([
            'Naam' => 'Mevrouw Pietersen',
            'status' => 'Route gewijzigd',
        ]);

        Ride::create([
            'Naam' => 'De heer De Vries',
            'status' => 'Vertraging door wegwerkzaamheden',
        ]);

        Ride::create([
            'Naam' => 'De Heer Kalden',
            'status' => 'Verkeersongeval gemeld',
        ]);
    }
}
