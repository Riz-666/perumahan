<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'id_foto';
    protected $table = 'media';
    protected $fillable = [
        'title',
        'keterangan_foto',
        'foto'
    ];
}
