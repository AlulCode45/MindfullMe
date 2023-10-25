<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanModel extends Model
{
    use HasFactory;

    protected $table = 'data_jawaban';
    protected $guarded = ['id'];
    public $timestamps = false;
}
