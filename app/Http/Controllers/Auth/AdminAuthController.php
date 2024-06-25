<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'Email' => 'required|Email',
            'Password' => 'required',
        ]);

        $credentials = $request->only('Email', 'Password');

        if (Auth::guard('Admin')->attempt($credentials)) {
            // Autentikasi berhasil
            $Admin = Auth::guard('Admin')->user();
            $token = $Admin->createToken('admin_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'Admin' => $Admin
            ], 200);
        }

        // Autentikasi gagal
        return response()->json([
            'message' => 'Kredensial yang dimasukkan tidak valid.'
        ], 401);
    }
}