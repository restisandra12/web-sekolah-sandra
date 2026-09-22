<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    protected $table = 'data_sekolah';

    protected $fillable = [
        'jumlah_siswa',
    ];
}