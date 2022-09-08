<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorCategory extends Model
{
    use HasFactory;
    public function color()
    {
        return $this->hasMany('App\Models\ColorShade','category_id');
    }
}
