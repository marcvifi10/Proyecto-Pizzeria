<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IngredientCategory;
use Illuminate\Support\Facades\Validator;

class IngredientCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$categories = IngredientCategory::get();
		return view("backend.ingredient_categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.ingredient_categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), IngredientCategory::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.ingredient_categories.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description
		];
		$category = IngredientCategory::create($data);
        return redirect(route("admin.ingredient_categories.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$category = IngredientCategory::find($id);
		return view("backend.ingredient_categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$category = IngredientCategory::find($id);
		return view("backend.ingredient_categories.edit", compact("category"));
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
		$category = IngredientCategory::find($id);
        $validator = Validator::make($request->all(), $category->createRules());
        if ($validator->fails()) {
            return redirect(route("admin.ingredient_categories.edit"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description
		];
		$category = $category->update($data);
        return redirect(route("admin.ingredient_categories.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		IngredientCategory::destroy($id);
		return redirect(route("admin.ingredient_categories.index"));
    }
}
