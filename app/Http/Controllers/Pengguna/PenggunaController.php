<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function Pengguna()
    {
        return view('dashboard.pengguna.pengguna');
    }
}
