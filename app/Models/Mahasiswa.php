<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'angkatan',
        'semester',
        'jurusan',
        'tanggal_lahir',
        'alamat',
        'no_telp',
        'status',
        'gender',
    ];

    public function historyIrs(){
        return $this->hasMany(HistoryIrs::class,'nim','nim');
    }
}
