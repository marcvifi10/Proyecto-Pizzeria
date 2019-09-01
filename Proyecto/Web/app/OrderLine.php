<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class OrderLine extends Model
{
    protected $fillable = ['order_id','product_id','quantify'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
