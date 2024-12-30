<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [
        'nama',
        'tanggal',
        'jam',
        'jumlahOrang',
    ];
}
