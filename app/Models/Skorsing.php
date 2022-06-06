<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skorsing extends Model
{
    use HasFactory;
    protected $table = 'skorsings';

    protected $fillable = [
        'no_member',
        'ket',
        'tgl_cabut_skorsing'
    ];
}
