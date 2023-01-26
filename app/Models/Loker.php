<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'lokers',
              $fillable = ['perusahaan_id', 'deskripsi_loker'],
              $with = ['perusahaan'];

    public function perusahaan() {
       return $this->belongsTo(Perusahaan::class);
    }
} 