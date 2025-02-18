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
        Schema::create('agenda_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->string('nama_kegiatan');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->time('jam_masuk')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_kegiatans');
    }
};
