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
        Schema::create('data_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('user_id')->references('id')->on('pengguna')->cascadeOnDelete();
            $table->string('judul_pertanyaan');
            $table->text('pertanyaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pertanyaan');
    }
};
