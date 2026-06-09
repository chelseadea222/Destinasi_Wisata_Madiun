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
        // Pastikan tabel tidak dibuat dua kali
        if (!Schema::hasTable('destinasis')) {
            Schema::create('destinasis', function (Blueprint $table) {
                $table->id();
                $table->string('nama_destinasi');
                $table->string('lokasi');
                $table->string('status');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasis');
    }
};