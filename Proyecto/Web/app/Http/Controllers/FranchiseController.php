<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Order;
use App\OrderState;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$franchises = Franchise::get();
        return view("backend.franchises.index", compact("franchises"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.franchises.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Franchise::createRules());
        if ($validator->fails()) {
            return redirect(route("admin.franchises.create"))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"address" => $request->address,
			"phone" => $request->phone,
			"email" => $request->email,
			"coordinates" => $request->coordinates
		];
		$franchise = Franchise::create($data);
        return redirect(route("admin.franchises.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $franchise = Franchise::find($id);
        return view("backend.franchises.show", compact("franchise"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $franchise = Franchise::find($id);
        return view("backend.franchises.edit", compact("franchise"));
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
        $franchise = Franchise::find($id);
        $validator = Validator::make($request->all(), $franchise->updateRules());
        if ($validator->fails()) {
            return redirect(route("admin.franchises.edit", $id))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			"name" => $request->name,
			"address" => $request->address,
			"phone" => $request->phone,
			"email" => $request->email,
			"coordinates" => $request->coordinates
		];
		$franchise = $franchise->update($data);
        return redirect(route("admin.franchises.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Franchise::destroy($id);
        return redirect(route("admin.franchises.index"));
	}
	
	public function dashboard() {
		$franchise = Auth::user()->franchise;
		$finishedState = OrderState::where("name", "finished")->first();
		$orders = Order::where("order_state_id", "!=", $finishedState->id)
				->orderBy("created_at", "desc")
				->get();
		return view("backend.franchises.dashboard", compact("orders"));
	}

	public function orders() {
		$franchise = Auth::user()->franchise;
		return view("backend.franchises.orders", compact("franchise"));
	}

	public function orderDetails($id) {
		$franchise = Auth::user()->franchise;
		$order = Order::where("franchise_id", $franchise->id)->find($id);
		return view("backend.franchises.order_details", compact("franchise", "order"));
	}
}
