<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Khs extends Model
{
    use HasFactory;

    protected $table = 'khs';

    protected $fillable = [
       'nim',
       'ips_mhs',
       'ipk_mhs',
    ];
}
