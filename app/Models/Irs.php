<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Irs extends Model
{
    use HasFactory;

    protected $table = 'irs';

    protected $fillable = [
       'nim',
       'isemester',
       'tahun_ajaran',
       'status',
    ];
}
