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
        Schema::create('data_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('user_id')->references('id')->on('pengguna');
            $table->integer('jenis_member')->foreign('jenis_member')->references('id')->on('pembayaran_member');
            $table->string('bukti_pembayaran');
            $table->enum('status', ['belum_terbayar', 'pending', 'terbayar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembayaran');
    }
};
