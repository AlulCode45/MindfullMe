<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Login()
    {
        return view('auth.login');
    }
    function LoginAction(Request $request, $user = 'pengguna')
    {
        switch ($user) {
            case 'pengguna':
                $credentials = $request->only(['email', 'password']);
                if (Auth::guard('pengguna')->attempt($credentials)) {
                    return redirect()->to('/pengguna');
                } else {
                    return redirect()->to('/login')->with('error', 'Username / password salah !');
                }
                break;
            case 'psikiater':
                $credentials = $request->only(['email', 'password']);
                if (Auth::guard('pengguna')->attempt($credentials)) {
                    return redirect()->to('/psikiater');
                } else {
                    return redirect()->to('/login')->with('error', 'Username / password salah !');
                }
            case 'admin':
                $credentials = $request->only(['email', 'password']);
                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/login')->with('error', 'Username / password salah !');
                }
        }
    }
    function Register()
    {
        return view('auth.register');
    }
    function RegisterAction(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "tempat_lahir" =>  $request->tempat_lahir,
            "tanggal_lahir" => $request->tanggal_lahir,
            "alamat" =>  $request->alamat,
            "deskripsi_diri" =>  $request->deskripsi_diri,
            "lulusan_universitas" =>  $request->lulusan_universitas,
            "whatsapp" =>  $request->whatsapp,
            "email" =>  $request->email,
            "password" =>  Hash::make($request->password),
            "status_member" => "guest",
            "role" => "pengguna",
            "status_akun" => "terverifikasi",
        ];

        if (User::insert($data)) {
            return back()->with('success', 'Pendaftaran berhasil');
        }
    }
    function Logout()
    {
        Auth::logout();
        return redirect()->to('/')->with('success', 'Logout berhasil !');
    }
    function ChangeProfile()
    {
    }
    function Profile()
    {
    }
}
