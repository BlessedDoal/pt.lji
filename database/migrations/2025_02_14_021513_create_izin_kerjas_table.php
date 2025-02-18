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
        Schema::create('izin_kerjas', function (Blueprint $table) {
            $table->id('id_izin_kerja');
            $table->foreignid('id_user')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_awal_izin');
            $table->date('tanggal_akhir_izin');
            $table->text('alasan');
            $table->enum('status', ['menunggu','disetujui','ditolak']);
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_kerjas');
    }
};
