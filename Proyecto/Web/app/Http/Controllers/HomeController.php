<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Franchise;
use App\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function inici()
    { 

        $locals = Franchise::get();

        return view('frontend.inici.cataleg',compact('locals'));

    }

    public function drinks() 
    {

            $drinks = Product::where('product_category_id',1)->get();

		   return view("frontend.drinks.cataleg",compact('drinks'));
    }
    
    public function pizzes() 
    {

            $pizzas = Product::where('product_category_id',2)->get();

		    return view("frontend.pizzes.cataleg",compact('pizzas'));
    }

    public function menus() 
    {

            $menus = Product::where('product_category_id',3)->get();   

	    	return view("frontend.menus.cataleg",compact('menus'));
    }

    public function desserts() 
    {

            $postres = Product::where('product_category_id',4)->get(); 

		    return view("frontend.desserts.cataleg",compact('postres'));
	}
	
	public function addProduct(Request $request, $id) {
		if (!$request->session()->has("products")) {
			$request->session()->put("products", []);
		}
		$request->session()->push("products", $id);
		return back();
	}

	public function showCart(Request $request) {
		$products = [];
		$productQuantities = [];
		$franchises = Franchise::get();
		if ($request->session()->has("products")) {
			foreach ($request->session()->get("products", []) as $product_id) {
				if (array_key_exists($product_id, $productQuantities)) {
					$productQuantities[$product_id]++;
				}
				else {
					$products[$product_id] = Product::find($product_id);
					$productQuantities[$product_id] = 1;
				}
			}
		}
		return view("frontend.cart.show", compact("products", "productQuantities", "franchises"));
	}

	public function orderState($id) {
		$order = Order::find($id);
		if ($order && !Auth::user()->id == $order->user->id) {
			$order = null;
		}
		return view("frontend.orders.show", compact("order"));
	}
}
