<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthControllers;
use App\Http\Controllers\Auth\VerifikasiControllers;




// register
Route::get('/register', function () {
    return view('Register');
});
Route::post('/register',  [AuthControllers::class, 'register'])->name('register');

Route::get('/verifikasi/{User_Id}', [VerifikasiControllers::class, 'showVerificationForm'])->name('Verifikator');
Route::post('/verifikasi', [VerifikasiControllers::class, 'verifyOtp'])->name('verify.otp');





    Route::get('/', function () {
        return view('Home');
    });

    Route::get('/transaksi', function () {
        return view('Transaksi');
    });
    Route::get('/invite', function () {
        return view('Invite');
    });
    Route::get('/set', function () {
        return view('Set-profile');
    });
    Route::get('/prefence', function () {
        return view('Set-prefence');
    });
    Route::get('/security', function () {
        return view('Set-security');
    });
    Route::get('/about', function () {
        return view('About');
    });
    Route::get('/add', function () {
        return view('Add-ons');
    });
    Route::get('/invite-detail', function () {
        return view('Invite-detail');
    });
    Route::get('/template', function () {
        return view('Template');
    });
    Route::get('/paket', function () {
        return view('Paket');
    });
    Route::get('/upload', function () {
        return view('Upload-Foto');
    });
    Route::get('/mbanking', function () {
        return view('Mbanking');
    });
    Route::get('/struck', function () {
        return view('transfer');
    });
    Route::get('/type', function () {
        return view('Invite-type');
    });

    Route::get('/packet', function () {
        return view('Packet');
    });
    
    Route::get('/payment', function () {
        return view('Payment');
    });
    


Route::middleware(['auth'])->group(function () {


    
});




