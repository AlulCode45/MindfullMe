<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggajianModel extends Model
{
    use HasFactory;
    protected $table = 'data_penggajian';
    protected $guarded = ['id'];
}
