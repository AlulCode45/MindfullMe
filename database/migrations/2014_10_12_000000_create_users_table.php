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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto_profile')->default('default-profile.jpg');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();

            $table->text('deskripsi_diri')->nullable();
            $table->string('lulusan_universitas')->nullable();

            $table->string('whatsapp');
            $table->string('email')->unique();
            $table->string('password');

            $table->enum('status_member', ['member', 'guest'])->default('guest');
            $table->date('akhir_member')->nullable();

            $table->enum('role', ['pengguna', 'psikiater'])->default('pengguna');
            $table->enum('status_akun', ['belum_terverifikasi', 'pending', 'terverifikasi'])->default('belum_terverifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
