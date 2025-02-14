<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $primaryKey = 'id_fasilitas'; 
    protected $casts = [
        'fasilitas' => 'array'
    ];
    protected $table = 'fasilitas';
    protected $fillable = [
        'nama_fasilitas'
    ];
}
