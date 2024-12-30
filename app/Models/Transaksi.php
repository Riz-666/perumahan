<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_rumah',
        'id_user',
        'tanggal_transaksi',
        'harga_jual',
        'metode_pembayaran',
        'keterangan',
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
