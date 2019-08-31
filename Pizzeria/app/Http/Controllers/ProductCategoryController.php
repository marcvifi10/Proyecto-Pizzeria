<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use Illuminate\Support\Facades\Validator;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$categories = ProductCategory::get();
		return  view("backend.product_categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.product_categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ProductCategory::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.product_categories.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description
		];
		$category = ProductCategory::create($data);
        return redirect(route("admin.product_categories.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$category = ProductCategory::find($id);
		return view("backend.product_categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$category = ProductCategory::find($id);
		return view("backend.product_categories.edit", compact("category"));
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
		$category = ProductCategory::find($id);
        $validator = Validator::make($request->all(), $category->createRules());
        if ($validator->fails()) {
            return redirect(route("admin.product_categories.edit"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description
		];
		$category = $category->update($data);
        return redirect(route("admin.product_categories.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		ProductCategory::destroy($id);
		return redirect(route("admin.product_categories.index"));
    }
}
