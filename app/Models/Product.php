<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function attributes()
    {
    return $this->hasMany('App\Models\ProductAttribute','product_id');
    }
}
