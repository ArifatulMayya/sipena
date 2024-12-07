<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwalkuliah extends Model
{
    use HasFactory;

    protected $table = 'Jadwalkuliah';

    protected $fillable = [
       'kode_mk',
       'nama_mk',
       'kelas',
       'hari',
       'nama_ruang',
       'sks',
       'sifat',
       'wkt_mulai',
       'wkt_selesai',
       'kuota',
       'status',
    ];
}
