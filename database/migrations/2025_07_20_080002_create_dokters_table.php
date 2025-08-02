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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('poli_id')->constrained('polis')->onDelete('cascade');
            $table->string('hari_kerja');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('photo')->nullable(); // <- Tambahkan ini
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
