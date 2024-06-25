<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'Paket';
    protected $primaryKey = 'Paket_Id';

    protected $fillable = [
        'Nama_Paket',
        'Desc_Paket',
        'Harga_Paket',
    ];

    public $timestamps = false;

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'Paket_Id', 'Paket_Id');
    }
}