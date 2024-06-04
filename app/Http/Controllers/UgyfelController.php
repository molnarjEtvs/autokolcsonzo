<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ugyfel;

class UgyfelController extends Controller
{
    public function ugyfellista(){
        $ugyfelek = Ugyfel::orderBy("nev","ASC")->get();
        return view("welcome",["ugyfelek" => $ugyfelek]);
    }
}
