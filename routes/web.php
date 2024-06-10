<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UgyfelController;

Route::get('/', [UgyfelController::class,"ugyfellista"])->name("fooldal");

Route::get('/uj-ugyfel',[UgyfelController::class,"ugyfelForm"])->name('ujugyfel');
Route::post('/uj-ugyfel',[UgyfelController::class,"ugyfelMentes"]);

Route::get('/ugyfelmodositas/{uid}',[UgyfelController::class,"ugyfelModositas"])->name('ugyfelmod');
Route::post('/ugyfelmodositas/{uid}',[UgyfelController::class,"ugyfelModositasMentes"]);