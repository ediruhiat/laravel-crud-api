<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Specs;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function specs()
    {
        return $this->belongsTo(Specs::class);
    }
}
