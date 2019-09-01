<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Ingredient;
use App\Product;
use App\User;
use App\ProductCategory;
use App\IngredientCategory;
use App\Menu;

class AdminController extends Controller
{
	public function dashboard() {
		$data = [
			"franchises" => Franchise::count(),
			"ingredients" => Ingredient::count(),
			"products" => Product::count(),
			"users" => User::count(),
			"product_categories" => ProductCategory::count(),
			"ingredient_categories" => IngredientCategory::count(),
			"menus" => Menu::count(),
		];
		return view("backend.admin.dashboard", compact("data"));
	}
}
