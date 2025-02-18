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
        Schema::create('asets', function (Blueprint $table) {
            $table->id('kd_barang');
            $table->foreignid('id_user')->constrained('users')->onDelete('cascade');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('foto');
            $table->string('pemilik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asets');
    }
};
