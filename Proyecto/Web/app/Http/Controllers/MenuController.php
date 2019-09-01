<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$menus = Menu::get();
		return view("backend.menus.index", compact("menus"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$products = Product::get();
		return view("backend.menus.create", compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Menu::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.menus.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"description" => $request->description,
			"price" => $request->price
		];
		$menu = Menu::create($data);
		$menu->products()->attach($request->products_ids);
        return redirect(route("admin.menus.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$menu = Menu::find($id);
		return view("backend.menus.show", compact("menu"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$menu = Menu::find($id);
		$products = Product::get();
        return view("backend.menus.edit", compact("menu", "products"));
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
        $menu = Menu::find($id);
        $validator = Validator::make($request->all(), $menu->updateRules());
        if ($validator->fails()) {
            return redirect(route("admin.menus.edit", $id))
                        ->withErrors($validator)
                        ->withInput();
        }

		$data = [
			"name" => $request->name,
			"description" => $request->description,
			"price" => $request->price
		];
		if ($menu->update($data)) {
			$menu->products()->detach();
			$menu->products()->attach($request->products_ids);
		}

        return redirect(route("admin.menus.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Menu::destroy($id);
        return redirect(route("admin.menus.index"));
    }
}
