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
        //
        Schema::table('presensis', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        });
        Schema::table('jadwal_pelajaran', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        });
        Schema::table('jadwal_pribadi', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        });
        Schema::table('nilais', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
