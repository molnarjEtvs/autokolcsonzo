<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fajl = file_get_contents("resources/fajlok/autok.txt");
        $sorok = explode("\n",$fajl);
        foreach($sorok as $sor){
            $sor = trim($sor);
            $adatok = explode(";",$sor);
            $auto1 = new Auto;
            $auto1->marka = $adatok[0];
            $auto1->tipus = $adatok[1];
            $auto1->szin = $adatok[2];
            $auto1->rendszam = $adatok[4];
            $auto1->ferhelyek = $adatok[3];
            $auto1->save();
        }
    }
}
