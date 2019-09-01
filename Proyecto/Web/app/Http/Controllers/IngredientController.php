<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\IngredientCategory;
use Illuminate\Support\Facades\Validator;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$ingredients = Ingredient::get();
        return view("backend.ingredients.index", compact("ingredients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories = IngredientCategory::get();
        return view("backend.ingredients.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Ingredient::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.ingredients.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

		$data = [
			"name" => $request->name,
			"description" => $request->description,
			"ingredient_category_id" => $request->ingredient_category_id
		];
		$ingredient = Ingredient::create($data);
		return redirect(route("admin.ingredients.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$ingredient = Ingredient::find($id);
        return view("backend.ingredients.show", compact("ingredient"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$ingredient = Ingredient::find($id);
		$categories = IngredientCategory::get();
        return view("backend.ingredients.edit", compact("ingredient", "categories"));
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
        $ingredient = Ingredient::find($id);
        $validator = Validator::make($request->all(), $ingredient->updateRules());
        if ($validator->fails()) {
            return redirect(route("admin.ingredients.edit", $id))
                        ->withErrors($validator)
                        ->withInput();
        }

		$data = [
			"name" => $request->name,
			"description" => $request->description,
			"ingredient_category_id" => $request->ingredient_category_id
		];
		$ingredient = $ingredient->update($data);
		return redirect(route("admin.ingredients.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Ingredient::destroy($id);
		return redirect(route("admin.ingredients.index"));
    }
}
