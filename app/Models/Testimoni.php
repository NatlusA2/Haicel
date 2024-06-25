<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'Testimoni';
    protected $primaryKey = 'Testimoni_Id';

    protected $fillable = [
        'Trans_id',
        'Deskripsi_Testimoni',
        'Rating_Testimoni',
    ];

    public $timestamps = false;

    public function Transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'Trans_Id', 'Transaksi_Id');
    }
}