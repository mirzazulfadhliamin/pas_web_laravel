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
        Schema::create('mugiwara_kru', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kekuatan_buah_iblis');
            $table->string('devisi');
            $table->string('tempat_asal');
            $table->bigInteger('bounty');
            $table->date('tanggal_bergabung');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mugiwara_kru');
    }
};
