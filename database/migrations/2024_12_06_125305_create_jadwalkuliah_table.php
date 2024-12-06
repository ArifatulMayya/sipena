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
        Schema::create('jadwalkuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk'); // Kode mata kuliah
            $table->string('nama_mk'); // Nama mata kuliah
            $table->string('kelas'); // Kelas 
            $table->string('hari'); // Hari jadwal kuliah
            $table->string('nama_ruang'); // Nama ruangan
            $table->integer('sks'); // SKS mata kuliah
            $table->string('sifat'); // Sifat mata kuliah (misalnya "Wajib", "Pilihan")
            $table->time('wkt_mulai'); // Waktu mulai
            $table->time('wkt_selesai'); // Waktu selesai
            $table->integer('kuota'); // Kuota kelas
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliah');
    }
};
