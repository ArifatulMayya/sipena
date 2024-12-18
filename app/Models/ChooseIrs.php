<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChooseIrs extends Model
{
    //
    protected $table = 'choose_irs';

    protected $fillable = [
        'user_id',
        'jadwal_kuliah_id',
        'status',
        'kode_mk',
        'nim',
        'semester_ambil',
    ];
}
