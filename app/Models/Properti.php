<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $table = 'properti';

    protected $primaryKey = 'id_rumah';
    protected $casts = [
        'fasilitas' => 'array'
    ];
    protected $fillable = [
        'nomor_rumah',
        'tipe_rumah',
        'luas_bangunan',
        'luas_tanah',
        'harga',
        'keterangan_rumah',
        'foto',
        'status',
    ];
}
