<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Promotion extends Model
{
    protected $fillable = ['name','price','description','date_start','date_end'];

    public function promotions_products()
    {
        return $this->belongsToMany(Products::class, 'promotions_products', 'id', 'id');
    }
}
