<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Irs extends Model
{
    use HasFactory;

    protected $table = 'irs';

    protected $fillable = [
       'nim',
       'semester',
       'tahun_ajaran',
       'status',
    ];
}
