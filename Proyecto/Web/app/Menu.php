<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Product;

class Menu extends Model
{
    protected $fillable = ['name','description','price'];

    public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'between:0,9999.99']
        ];
    }

    public function updateRules() {
        return Menu::createRules();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'menu_product');
    }
}
