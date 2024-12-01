<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';

    protected $fillable = [
       'no_ruang',
       'blok_gedung',
       'lantai',
       'kapasitas',
       'keperluan',
       'status',
    ];
}
