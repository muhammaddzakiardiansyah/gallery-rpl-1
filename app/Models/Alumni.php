<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis',
              $fillable = ['nama_alumni', 'jurusan', 'thn_lulus', 'status'];
}
