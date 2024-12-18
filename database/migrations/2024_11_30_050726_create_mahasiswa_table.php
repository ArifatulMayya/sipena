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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('email');
            $table->integer('angkatan');
            $table->integer('semester');
            $table->string('jurusan');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('status');
            $table->string('gender');
            $table->string('nip_doswal')->nullable();
            $table->string('akses_irs')->default('buka');
            $table->float('ips')->default(2.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
