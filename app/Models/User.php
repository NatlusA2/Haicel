<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens;

    protected $table = 'User';
    protected $primaryKey = 'User_Id';
    protected $fillable = [
        'Nama',
        'Nomor_Telp',
    ];
    public $timestamps = false;

    public function credential()
    {
        return $this->hasOne(UserCredential::class, 'User_Id', 'User_Id');
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'User_Id', 'User_Id');
    }

    /**
     * Enkripsi Nomor_Telp sebelum disimpan ke database.
     *
     * @param  string  $value
     * @return string
     */
    public function setNomor_TelpAttribute($value)
    {
        $encryptedValue = $this->encryptValue($value);
        $this->attributes['Nomor_Telp'] = $encryptedValue;
    }

    /**
     * Dekripsi Nomor_Telp setelah diambil dari database.
     *
     * @param  string  $value
     * @return string
     */
    public function getNomor_TelpAttribute($value)
    {
        $decryptedValue = $this->decryptValue($value);
        return $decryptedValue;
    }

    /**
     * Enkripsi nilai menggunakan AES-256-CBC
     *
     * @param  string  $value
     * @return string
     */
    private function encryptValue($value)
    {
        $encryptionKey = config('app.encryption_key');
        $ivLength = openssl_cipher_iv_length('AES-256-CBC');
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encryptedValue = openssl_encrypt($value, 'AES-256-CBC', $encryptionKey, 0, $iv);
        return base64_encode($iv . $encryptedValue);
    }

    /**
     * Dekripsi nilai yang dienkripsi dengan AES-256-CBC
     *
     * @param  string  $value
     * @return string
     */
    private function decryptValue($value)
    {
        $encryptionKey = config('app.encryption_key');
        $data = base64_decode($value);
        $ivLength = openssl_cipher_iv_length('AES-256-CBC');
        $iv = substr($data, 0, $ivLength);
        $encryptedValue = substr($data, $ivLength);
        $decryptedValue = openssl_decrypt($encryptedValue, 'AES-256-CBC', $encryptionKey, 0, $iv);
        return $decryptedValue;
    }
}