<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('autok', function (Blueprint $table) {
            $table->id("a_id");
            $table->string("marka",30);
            $table->string("tipus",30);
            $table->string("szin",20);
            $table->string("rendszam",20);
            $table->tinyInteger("ferhelyek");            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autok');
    }
};
