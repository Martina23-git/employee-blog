<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Mengizinkan semua kolom diisi secara otomatis
    protected $guarded = ['id'];
}
