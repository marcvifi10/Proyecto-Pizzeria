<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Ingredient;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$products = Product::get();
		return view("backend.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories = ProductCategory::get();
		$ingredients = Ingredient::get();
		return view("backend.products.create", compact("categories", "ingredients"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Product::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.products.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description,
			"price" => $request->price,
            "product_category_id" => $request->product_category_id,
            "product_size_id" => 1,
            "type_mass_id" => 1
		];
		$product = Product::create($data);
		$product->ingredients()->attach($request->ingredients_ids);
        return redirect(route("admin.products.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$product = Product::find($id);
		return view("backend.products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$product = Product::find($id);
		$categories = ProductCategory::get();
		$ingredients = Ingredient::get();
        return view("backend.products.edit", compact("product", "categories", "ingredients"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validator = Validator::make($request->all(), $product->updateRules());
        if ($validator->fails()) {
            return redirect(route("admin.products.edit", $id))
                        ->withErrors($validator)
                        ->withInput();
        }

		$data = [
			"name" => $request->name,
			"description" => $request->description,
			"price" => $request->price,
			"product_category_id" => $request->product_category_id
		];
		if ($product->update($data)) {
			$product->ingredients()->detach();
			$product->ingredients()->attach($request->ingredients_ids);
		}

        return redirect(route("admin.products.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Product::destroy($id);
        return redirect(route("admin.products.index"));
    }
}
