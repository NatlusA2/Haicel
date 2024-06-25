<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserCredential;
use Twilio\Rest\Client;

class AuthControllers extends Controller
{
    

    public function register(Request $request)
{
    $validatedData = $request->validate([
        'Nama' => 'required|string|max:255',
        'Nomor_Telp' => 'required|string|unique:user,Nomor_Telp',
    ]);

    $user = User::create($validatedData);

    $code = mt_rand(100000, 999999);
    
    try {
        $this->sendSMS($user->Nomor_Telp, $code);
    } catch (\Exception $e) {
        \Log::error('SMS sending failed: '.$e->getMessage());
        return back()->withErrors(['sms' => 'Gagal mengirim SMS. Silakan coba lagi.']);
    }

    $user->credential()->create([     
        'Nomor_Telp' => $user->Nomor_Telp,
        'Code_Verif' => $code,
    ]);

    \Log::info("User baru terdaftar: ID {$user->User_Id}, Nomor Telp: {$user->Nomor_Telp}");

    return redirect()->route('Verifikator', ['User_Id' => $user->User_Id]);
}
    
        private function sendSMS($phoneNumber, $code)
        {
            $twilio = new Client(config('twilio.sid'), config('twilio.token'));
            $from = config('twilio.from');
            
            $twilio->messages->create( 
                $phoneNumber,
                [
                    'from' => $from,
                    'body' => "Kode verifikasi Anda adalah: $code"
                ]
            );
        }
    
    // public function login(Request $request)
    // {
    //     // Validasi input
    //     $validatedData = $request->validate([
    //         'Nomor_Telp' => 'required|string',
    //     ]);

    //     $user = User::where('Nomor_Telp', $validatedData['Nomor_Telp'])->first();

    //     if (!$user) {
    //         return response()->json(['error' => 'Nomor telepon tidak terdaftar'], 404);
    //     }

        
    //     $code = mt_rand(100000, 999999); 
    //     $this->sendSMS($user->Nomor_Telp, $code);

    //     // Simpan kode OTP ke dalam tabel user_credentials
    //     $user->credential()->create([
    //         'Nomor_Telp' => $user->Nomor_Telp,
    //         'Code_Verif' => $code,
    //     ]);

    //     return redirect()->route('verification.notice')
    //     ->with('message', 'Registrasi berhasil. Silakan verifikasi nomor telepon Anda dengan kode OTP yang dikirim.');
    // }

    


    // public function verifyOtp(Request $request)
    //     {
    //         $validatedData = $request->validate([
    //             'Nomor_Telp' => 'required|string',
    //             'Code_Verif' => 'required|string',
    //         ]);
    
    //         $user = User::where('Nomor_Telp', $validatedData['Nomor_Telp'])->first();
    
    //         if (!$user) {
    //             return response()->json(['error' => 'Nomor telepon tidak terdaftar'], 404);
    //         }
    
    //         $userCredential = $user->credential;
    
    //         if (!$userCredential || $userCredential->Code_Verif !== $validatedData['Code_Verif']) {
    //             return response()->json(['error' => 'Kode OTP tidak valid'], 400);
    //         }
    
            // Kode OTP valid, buat token autentikasi dengan Laravel Sanctum
  
    
            // Hapus kode OTP jika berhasil
        //     $userCredential->delete();
    
        //     return response()->json(['token' => $token]);
        // }
}