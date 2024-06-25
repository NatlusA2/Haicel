<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'Transaksi';
    protected $primaryKey = 'Transaksi_Id';

    protected $fillable = [
        'Nama_Acara',
        'User_Id',
        'Paket_Id',
        'Kategori_Id',
        'Id_Bank',
        'Url_Undangan',
        'Tanggal_Resepsi',
        'Gambar',
        'Status_Pembayaran',
        'Jumlah_Tamu',
        'Lokasi',
    ];

    public $timestamps = false;

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'Paket_Id', 'Paket_Id');
    }
    public function Testimoni()
    {
        return $this->belongsTo(Testimoni::class, 'Trans_Id', 'Transaksi_Id');
    }
    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'Kategori_Id', 'Kategori_Id');
    }
    public function Bank(){
        return $this->belongsTo(Bank::class, 'Id_Bank', 'Id_Bank');
    }
   
}
