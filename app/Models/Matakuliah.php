<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'sifat',
        'smt',
    ];

    public function historyIrs(){
        return $this->hasMany(HistoryIrs::class,'kode_mk','kode_mk');
    }
}
