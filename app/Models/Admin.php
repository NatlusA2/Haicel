<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'Admin';
    protected $primaryKey = 'Admin_Id';

    protected $fillable = [
        'Nama_Admin',
        'Email',
        'Password'
    ];

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

}
