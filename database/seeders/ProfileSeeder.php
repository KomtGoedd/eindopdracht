<?php 
use Illuminate\Database\Seeder;
use App\Models\User;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->update([
                'bedrijfsnaam' => 'Voorbeeldbedrijf',
                'straat_huisnummer' => 'Voorbeeldstraat 123',
                'postcode' => '1234 AB',
                'plaats' => 'Voorbeeldplaats',
                'kvknummer' => '12345678',
                'telefoonnummer' => '0123456789',
            ]);
        }
    }
}
