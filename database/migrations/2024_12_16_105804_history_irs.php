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
        Schema::create('history_irs',function(Blueprint $table){
            $table->id();
            $table->string('nim');
            $table->integer('semester');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->string('kelas');
            $table->string('nama_ruang'); 
            $table->string('hari'); 
            $table->time('wkt_mulai');
            $table->time('wkt_selesai');
            $table->integer('nilai');
            $table ->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_irs');
    }
};
