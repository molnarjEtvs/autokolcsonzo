<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UgyfelController;

Route::get('/', [UgyfelController::class,"ugyfellista"]);
