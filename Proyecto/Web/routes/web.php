<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('inici'));
});

Auth::routes();
Route::get('/logout', array("uses" => 'Auth\LoginController@logout', "as" => "logout"))->middleware("auth");

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inici', 'HomeController@inici')->name('inici');
Route::get('/pizzes', 'HomeController@pizzes')->name('pizzes');
Route::get('/drinks', 'HomeController@drinks')->name('drinks');
Route::get('/menus', 'HomeController@menus')->name('menus');
Route::get('/desserts', 'HomeController@desserts')->name('desserts');

Route::group(["middleware" => ["auth"]], function () {
	Route::get("/add_product/{id}", array("uses" => "HomeController@addProduct", "as" => "add_product"));
	Route::get("/cart", array("uses" => "HomeController@showCart", "as" => "cart"));
	Route::get("/order/{id}", array("uses" => "HomeController@orderState", "as" => "order_state"));
	Route::post("/create_order", array("uses" => "OrderController@store", "as" => "create_order"));
});

Route::group(["middleware" => ["auth", "userType:admin"],
			"prefix" => "admin", "as" => "admin."], function () {
	Route::get("/dashboard", array("uses" => "AdminController@dashboard", "as" => "dashboard"));
	Route::resource("/franchises", "FranchiseController");
	Route::resource("/ingredients", "IngredientController");
	Route::resource("/products", "ProductController");
	Route::resource("/product_categories", "ProductCategoryController");
	Route::resource("/ingredient_categories", "IngredientCategoryController");
	Route::resource("/users", "UserController");
	Route::resource("/menus", "MenuController");
});

// Route::get('localization/{lang?}','LanguageLocalizationController@index');

Route::group(["middleware" => ["auth", "userType:franchise"],
			"prefix" => "franchise", "as" => "franchise."], function () {
	Route::get("/dashboard", array("uses" => "FranchiseController@dashboard", "as" => "dashboard"));
	Route::get("/orders", array("uses" => "FranchiseController@orders", "as" => "orders"));
	Route::get("/orders/{id}", array("uses" => "FranchiseController@orderDetails", "as" => "orderDetails"));
	Route::get("/orders/next_state/{id}", array("uses" => "OrderController@putNextState", "as" => "nextState"));
});

