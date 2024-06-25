<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'Kategori';
    protected $primaryKey = 'Kategori_Id';
    
    protected $fillable = ['Nama', 'Detail'];
    
    public $timestamps = false;
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'Kategori_Id', 'Kategori_Id');
    }
}
