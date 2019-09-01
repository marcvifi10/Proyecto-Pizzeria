<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductCategory extends Model
{
    protected $fillable = ['name','description'];

    public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string']
        ];
    }

    public function updateRules() {
        return ProductCategory::createRules();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
