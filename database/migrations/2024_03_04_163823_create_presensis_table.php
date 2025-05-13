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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->foreignId('id_mapel');
            $table->foreignId('id_jadwal')->nullable();
            $table->foreign('id_siswa')->references('id')->on('users')->onDelete('cascade');
            $table->string('status');
            $table->date('tanggal')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
