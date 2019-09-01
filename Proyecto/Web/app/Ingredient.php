<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\IngredientCategory;
use App\Product;

class Ingredient extends Model
{
    protected $fillable = ['name','description','ingredient_category_id'];

    public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'ingredient_category_id' => ['required']
        ];
    }

    public function updateRules() {
        return Ingredient::createRules();
    }

    public function ingredientcategory()
    {
        return $this->belongsTo(IngredientCategory::class, 'ingredient_category_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::Class);
    }

    public function products_ingredients()
    {
        return $this->belongsToMany(Products::class, 'products_ingredients', 'id', 'id');
    }
}
