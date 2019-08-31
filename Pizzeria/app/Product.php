<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\OrderLine;
use App\ProductSize;
use App\TypeMass;
use App\Ingredient;
use App\Menu;
use App\Promotion;

class Product extends Model
{
    protected $fillable = ['name','description','price','product_category_id','product_size_id','type_mass_id'];

    public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'between:0,9999.99'],
            'product_category_id' => ['required']
        ];
    }

    public function updateRules() {
        return Product::createRules();
    }

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function orderline()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function productsize()
    {
        return $this->belongsTo(ProductSize::class);
    }

    public function typemass()
    {
        return $this->belongsTo(TypeMass::class);
	}

    /* Aquesta unio es amb una taula intermitja "products_ingredients".*/
    
    public function ingredients() 
    {
		return $this->belongsToMany(Ingredient::class);
    }
    
    public function menus_products()
    {
        return $this->belongsToMany(Menu::class, 'menu_product');
    }

    public function promotions_products()
    {
        return $this->belongsToMany(Promotion::class, 'promotions_products', 'id', 'id');
    }

    public function products_ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'products_ingredients', 'id', 'id');
    }
}
