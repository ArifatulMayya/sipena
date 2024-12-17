<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryIrs extends Model
{
    use HasFactory;
    // nama tabel di database
    protected $table='history_irs';
    //kolom yang diisi massal
    protected $fillable=[
        'nim',
        'semester',
        'kode_mk',
        'nama_mk',
        'sks',
        'kelas',
        'nama_ruang',
        'hari',
        'wkt_mulai',
        'wkt_selesai',
        'nilai'
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class,'nim','nim');
    }

    public function mataKuliah(){
        return $this->belongsTo(Matakuliah::class,'kode_mk','kode_mk');
    }
}
