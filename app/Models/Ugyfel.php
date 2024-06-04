<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugyfel extends Model
{
    use HasFactory;
    public $table = "ugyfelek";
    public $timestamps = false;
    public $primaryKey = "u_id";
    public $guarded = [];
}
