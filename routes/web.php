<?php

use Illuminate\Support\Facades\Route;

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

// register
Route::get('/register', function () {
    return view('Register');
});

Route::get('/verifikasi', function () {
    return view('Verifikasi');
});

Route::get('/packet', function () {
    return view('Packet');
});

Route::get('/payment', function () {
    return view('Payment');
});