<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredient;

class IngredientCategory extends Model
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
	
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

}
