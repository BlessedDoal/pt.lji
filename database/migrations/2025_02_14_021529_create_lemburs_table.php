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
        Schema::create('lemburs', function (Blueprint $table) {
            $table->id('id_lembur');
            $table->foreignid('id_user')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_lembur');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->text('alasan');
            $table->enum('status', ['menunggu','disetujui','ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lemburs');
    }
};
