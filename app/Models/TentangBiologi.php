<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangBiologi extends Model
{
    use HasFactory;

    protected $table = 'tentang_biologis';
    protected $fillable = [
        'thumbnail',
        'deskripsi'
    ];
}