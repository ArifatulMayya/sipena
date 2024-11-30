<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programstudi extends Model
{
    use HasFactory;

    protected $table = 'programstudi';

    protected $fillable = [
       'prodi',
    ];
}
