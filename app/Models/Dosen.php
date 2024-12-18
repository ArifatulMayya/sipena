<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    // use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
       'nama',
       'nip',
       'email',
       'no_telp',
       'tanggal_lahir',
       'alamat',
       'gender',
    ];


}
