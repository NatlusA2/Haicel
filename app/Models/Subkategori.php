<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $table = 'SubKategori';
    protected $primaryKey = 'Subkategori_Id';
    public $timestamps = false;

    protected $fillable = ['Kategori_Id', 'Nama', 'Detail'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'Kategori_Id', 'Kategori_Id');
    }
}