<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Admin()
    {
        return view('dashboard.pengguna.pengguna');
    }
}
