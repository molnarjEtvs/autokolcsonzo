<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kolcsonzes;

class KolcsonzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fajl = file_get_contents("resources/fajlok/kolcsonzesek.txt");
        $sorok = explode("\n",$fajl);
        foreach($sorok as $sor){
            $sor = trim($sor);
            $adatok = explode(";",$sor);
            $kolcsonzes1 = new Kolcsonzes;
            $kolcsonzes1->u_id = $adatok[0];
            $kolcsonzes1->a_id = $adatok[1];
            $kolcsonzes1->napi_dij = $adatok[2];
            $kolcsonzes1->ki_kolcsonzes = $adatok[3];
            $kolcsonzes1->vissza_kolcsonzes = $adatok[4];
            $kolcsonzes1->save();
        }
    }
}
