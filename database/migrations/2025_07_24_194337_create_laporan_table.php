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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->string('nama_tempat');
            $table->string('alamat');
            $table->string('foto');
            $table->text('deskripsi');
            $table->string('kategori');
            $table->enum('status', ['Dikirim', 'Diproses', 'Selesai']);
            $table->date('created_at')->default(date('Y-m-d'));
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
