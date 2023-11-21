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
        Schema::create('pirate_kings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('devisi');
            $table->string('tempat_asal');
            $table->bigInteger('bounty');
            $table->date('tanggal_bergabung');
            $table->string('senjata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pirate_kings');
    }
};
