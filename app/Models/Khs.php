<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
