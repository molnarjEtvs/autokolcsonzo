<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ugyfel;

class UgyfelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fajl = file_get_contents("resources/fajlok/ugyfelek.txt");
        $sorok = explode("\n",$fajl);
        foreach($sorok as $sor){
            $sor = trim($sor);
            $adatok = explode(";",$sor);
            $ugyfel1 = new Ugyfel;
            $ugyfel1->nev = $adatok[0];
            $ugyfel1->cim = $adatok[1];
            $ugyfel1->telefonszam = $adatok[2];
            $ugyfel1->save();
        }
    }
}
