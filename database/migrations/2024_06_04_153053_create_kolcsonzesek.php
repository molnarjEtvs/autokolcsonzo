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
        Schema::create('kolcsonzesek', function (Blueprint $table) {
            $table->id("k_id");
            $table->foreignId("u_id")->references("u_id")->on("ugyfelek");
            $table->foreignId("a_id")->references("a_id")->on("autok");
            $table->smallInteger("napi_dij");
            $table->date("ki_kolcsonzes");
            $table->date("vissza_kolcsonzes");            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kolcsonzesek');
    }
};
