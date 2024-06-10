<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ugyfel;

class UgyfelController extends Controller
{
    public function ugyfellista(){
        $ugyfelek = Ugyfel::orderBy("nev","ASC")->paginate(10);
        return view("welcome",["ugyfelek" => $ugyfelek]);
    }

    public function ugyfelForm(){
        return view("ugyfelForm");
    }

    public function ugyfelMentes(Request $req){
        //1. validálás (beírt adatok ellenőrzés)
        $req->validate(
            [
                "nev" => "required|min:5|max:100",
                "cim" => "required|min:10|max:200",
                "telefonszam" => "required|min:7|max:30"
            ],
            [
                "nev.required" => "A név mező kitöltése kötelező!",
                "nev.min" => "A névnek minimum 5 karakternek kell lennie!",
                "nev.max" => "A név maximum 100 karakter lehet",

                "cim.required" => "A cím mező kitöltése kötelező!",
                "cim.min" => "A címnek minimum 10 karakternek kell lennie!",
                "cim.max" => "A cím maximum 200 karakter lehet",

                "telefonszam.required" => "A telefonszám mező kitöltése kötelező!",
                "telefonszam.min" => "A telefonszámnak minimum 7 karakternek kell lennie!",
                "telefonszam.max" => "A telefonszám maximum 30 karakter lehet"
            ]
        );
        //2. mentés adatbázisba
        $ujugyfel = new Ugyfel;
        $ujugyfel->nev = $req->nev;
        $ujugyfel->cim = $req->cim;
        $ujugyfel->telefonszam = $req->telfonszam;
        $ujugyfel->save();
        //3. visszaairányítjuk ugyan oda, és egy üzenetet adunk hogy sikeres
        return redirect()->route('ujugyfel')->with('sikeres','1');
    }

    public function ugyfelModositas($uid){
        $ugyfel = Ugyfel::find($uid);
        if(!$ugyfel){
            return redirect()->route('fooldal');
        }

        return view('ugyfelForm',["ugyfel" => $ugyfel]);
    }

    public function ugyfelModositasMentes(Request $req, $uid){
        $req->validate(
            [
                "nev" => "required|min:5|max:100",
                "cim" => "required|min:10|max:200",
                "telefonszam" => "required|min:7|max:30"
            ],
            [
                "nev.required" => "A név mező kitöltése kötelező!",
                "nev.min" => "A névnek minimum 5 karakternek kell lennie!",
                "nev.max" => "A név maximum 100 karakter lehet",

                "cim.required" => "A cím mező kitöltése kötelező!",
                "cim.min" => "A címnek minimum 10 karakternek kell lennie!",
                "cim.max" => "A cím maximum 200 karakter lehet",

                "telefonszam.required" => "A telefonszám mező kitöltése kötelező!",
                "telefonszam.min" => "A telefonszámnak minimum 7 karakternek kell lennie!",
                "telefonszam.max" => "A telefonszám maximum 30 karakter lehet"
            ]
        );
        $ugyfel = Ugyfel::find($uid);
        if(!$ugyfel){
            return redirect()->route('fooldal');
        }
        $ugyfel->cim = $req->cim;
        $ugyfel->nev = $req->nev;
        $ugyfel->telefonszam = $req->telefonszam;
        $ugyfel->save();
        return redirect()->route('ugyfelmod',$uid)->with('sikeres','1');
    }
}
