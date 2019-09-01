<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class TypeMass extends Model
{
    protected $fillable = ['name','description'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
