<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; // arahkan ke table mahasiswa
    protected $guarded = []; // tidak ada field yang dibatasi, semua field bisa diakses
    //
}


