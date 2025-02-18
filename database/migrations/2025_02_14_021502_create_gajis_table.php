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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id('id_gaji');
            $table->foreignid('id_user');
            $table->decimal('total_gaji', 10, 2)->default(0);
            $table->decimal('total_lembur', 10, 2)->default(0);
            $table->decimal('total_bonus', 10, 2)->default(0);
            $table->integer('bulan');
            $table->integer('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
