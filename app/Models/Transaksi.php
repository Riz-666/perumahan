<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_user',
        'id_rumah',
        'nama',
        'hp',
        'tipe_rumah',
        'pembayaran',
        'status',
        'harga',
        'jumlah',
        'total_pembayaran',
        'tanggal_transaksi',
    ];

    public function properti()
    {
        return $this->belongsTo(Properti::class, 'id_rumah');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
