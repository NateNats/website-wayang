<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    protected $fillable = [
        'nama',
        'jenis',
        'bahan',
        'deskripsi',
        'gambar',
    ];
}
