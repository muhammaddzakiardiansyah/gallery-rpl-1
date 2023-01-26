<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaans',
              $fillable = ['perusahaan', 'file_logo'],
              $with = ['perusahaan'];

    public function perusahaan() {
        //
    }
}
