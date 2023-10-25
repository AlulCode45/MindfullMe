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
        Schema::create('jawaban_quis', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('user_id')->refences('pengguna')->on('id')->cascadeOnDelete();
            $table->integer('quis_id')->foreign('quis_id')->references('quis')->on('id')->cascadeOnDelete();
            $table->integer('point')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_quis');
    }
};
