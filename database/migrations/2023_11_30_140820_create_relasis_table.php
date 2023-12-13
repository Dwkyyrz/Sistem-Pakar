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
        Schema::create('relasis', function (Blueprint $table) {
            $table->id();
            $table->string('gejala_id');
            $table->string('kerusakan_id');
            $table->timestamps();
            $table->index('gejala_id');
            $table->index('kerusakan_id');
            $table->foreign('gejala_id')->references('kode_gejala')->on('gejalas')->onDelete('cascade');
            $table->foreign('kerusakan_id')->references('kode_kerusakan')->on('kerusakans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relasis');
    }
};
