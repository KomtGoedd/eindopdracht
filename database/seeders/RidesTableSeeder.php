<?php
 
use Illuminate\Database\Seeder;
use App\Models\Ride;

class RidesTableSeeder extends Seeder
{
    public function run()
    {
        // Voeg enkele standaardritten toe aan de "rides" tabel
        Ride::create([
            'Naam' => 'De heer Janssen',
            'status' => 'Afgerond',
        ]);

        Ride::create([
            'Naam' => 'Mevrouw Pietersen',
            'status' => 'Lopend',
        ]);

        Ride::create([
            'Naam' => 'De heer De Vries',
            'status' => 'Geannuleerd',
        ]);
        Ride::create([
            'Naam' => 'De Heer Kalden',
            'status' => 'Geplanned',
        ]);

        // Voeg meer ritten toe zoals gewenst
    }
}
