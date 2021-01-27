<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'launch',
        'display',
        'platform',
        'cpu',
        'rom',
        'ram',
        'camera',
        'battery',
    ];
}
