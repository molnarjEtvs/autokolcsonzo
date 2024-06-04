<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolcsonzes extends Model
{
    use HasFactory;
    public $table = "kolcsonzesek";
    public $timestamps = false;
    public $primaryKey = "k_id";
    public $guarded = [];
}
