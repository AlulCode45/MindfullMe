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
        Schema::create('data_penggajian', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('user_id')->references('id')->on('pengguna')->cascadeOnDelete();
            $table->text('pesan');
            $table->integer('jumlah_gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penggajian');
    }
};
