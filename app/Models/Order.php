<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderProduct()
    {
       return $this->hasMany('App\Models\OrderProduct','order_id');
    }

    public function orders()
    {
    return $this->hasMany('App\Models\OrderProduct','order_id');
    }
}
