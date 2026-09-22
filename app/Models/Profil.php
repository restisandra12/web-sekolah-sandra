<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profils';

    protected $fillable = [
        'tentang_sekolah',
        'visi',
        'misi',
    ];
}