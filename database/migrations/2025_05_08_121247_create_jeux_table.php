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
        Schema::create('jeux', function (Blueprint $table) {
            $table->id();
            $table->integer('choix1');
            $table->integer('choix2');
            $table->integer('choix3');
            $table->integer('choix4');
            $table->integer('jackpot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeux',function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
