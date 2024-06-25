<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class VerifikasiControllers extends Controller
{
    
    public function showVerificationForm($User_Id)
    {
        $User_Id = $request->session()->get('User_Id');
        return view('verifikasi.form', ['User_Id' => $User_Id]);
    }
    
    
    public function verifyOtp(Request $request)
{
    Log::info("Memulai proses verifikasi OTP", $request->all());

    try {
        $validator = Validator::make($request->all(), [
            'User_Id' => 'required|exists:user,User_Id',
            'Code_Verif' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::warning("Validasi gagal", $validator->errors()->toArray());
            return back()->withErrors($validator)->withInput();
        }

        Log::info("Validasi berhasil, melanjutkan ke proses verifikasi");

        return DB::transaction(function () use ($request) {
            $user = User::findOrFail($request->User_Id);

            Log::info("User ditemukan", ['User_Id' => $user->User_Id]);

            $credential = $user->credential;

            if (!$credential) {
                Log::warning("Kredensial tidak ditemukan", ['User_Id' => $user->User_Id]);
                return back()->withErrors(['Code_Verif' => 'Kredensial tidak ditemukan']);
            }

            Log::info("Kredensial ditemukan, memeriksa kode OTP");

            if (!hash_equals($credential->Code_Verif, $request->Code_Verif)) {
                Log::warning("Kode OTP tidak valid", ['User_Id' => $user->User_Id]);
                return back()->withErrors(['Code_Verif' => 'Kode OTP tidak valid']);
            }

            Log::info("Kode OTP valid, memeriksa waktu kadaluarsa");

            if (now()->diffInMinutes($credential->created_at) > 15) {
                Log::warning("Kode OTP kadaluarsa", ['User_Id' => $user->User_Id]);
                return back()->withErrors(['Code_Verif' => 'Kode OTP sudah kadaluarsa']);
            }

            Log::info("Kode OTP masih berlaku, melakukan login");

            Auth::login($user);

            Log::info("Login berhasil, menghapus kredensial");

            $credential->delete();

            Log::info("Proses verifikasi OTP selesai", ['User_Id' => $user->User_Id]);

            return redirect()->route('home')->with('success', 'Registrasi berhasil dan Anda telah login.');
        });
    } catch (\Exception $e) {
        Log::error("Terjadi kesalahan saat verifikasi OTP", [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        return back()->withErrors(['error' => 'Terjadi kesalahan saat memproses OTP']);
    }
}
}