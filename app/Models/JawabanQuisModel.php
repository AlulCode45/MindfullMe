<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataQuisModel extends Model
{
    use HasFactory;
    protected $table = 'jawaban_quis';
    protected $guarded = ['id'];
    public $timestamps = false;
}
