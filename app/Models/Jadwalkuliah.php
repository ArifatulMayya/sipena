<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwalkuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwalkuliah';

    protected $fillable = [
       'kode_mk',
       'nama_mk',
       'hari',
       'nama_ruang',
       'sks',
       'sifat',
       'wkt_mulai',
       'wkt_selesai',
       'kuota',
    ];
}
