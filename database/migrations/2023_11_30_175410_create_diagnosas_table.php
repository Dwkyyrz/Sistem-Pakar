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
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('pekerjaan');
            $table->string('kerusakan_id');
            $table->timestamps();
            $table->foreign('kerusakan_id')->references('kode_kerusakan')->on('kerusakans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosas');
    }
};
