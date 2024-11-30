<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangkelas extends Model
{
    use HasFactory;

    protected $table = 'ruangkelas';

    protected $fillable = [
       'nama_ruang',
       'kapasitas',
    ];
}
