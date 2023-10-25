<?php

namespace App\Http\Controllers\Psikiater;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PsikiaterController extends Controller
{
    function Psikiater()
    {
        return view('dashboard.psikiater.psikiater');
    }
}
