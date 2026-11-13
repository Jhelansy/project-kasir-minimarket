<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'total_harga',
        'bayar',
        'kembalian'
    ];

    public function detail()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}