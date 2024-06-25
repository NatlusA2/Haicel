<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCredential extends Model
{
    protected $table = 'User_Credentials';
    protected $primaryKey = 'User_Cred_Id';

    protected $fillable = [
        'User_Id',
        'Nomor_Telp',
        'Code_Verif',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id', 'User_Id');
    }
}