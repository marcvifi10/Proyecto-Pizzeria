<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderLine;
use App\HistoricState;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
	private static $orderStates = [1, 2, 3, 4];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$orderLines = unserialize($request->orderLines);
		if (count($orderLines) <= 0) {
			return back();
		}

		$validator = Validator::make($request->all(), Order::createRules());
        if ($validator->fails()) {
            return back()
					->withErrors($validator)
					->withInput();
        }

		Auth::user()->update(["franchise_id" => $request->franchise_id]);
        $data = [
			'franchise_id' => $request->franchise_id,
            'user_id' => Auth::user()->id,
            'order_state_id' => OrderController::$orderStates[0]
		];
		$order = Order::create($data);
		foreach ($orderLines as $product_id => $quantity) {
			$orderLineData = [
				'order_id' => $order->id,
				'product_id' => $product_id,
				'quantify' => $quantity
			];
			$newOrderLine = OrderLine::create($orderLineData);
		}

		$historicState = HistoricState::create([
			"order_id" => $order->id,
			"order_state_id" => OrderController::$orderStates[0]
		]);

		$request->session()->put("products", []);
		
        return redirect(route("order_state", $order->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
	}
	
	private static function getNextState($state) {
		$index = array_search($state, OrderController::$orderStates);
		if ($index !== false) {
			if ($index < sizeof(OrderController::$orderStates) - 1) {
				$index++;
			}
		}
		return $index;
	}

	public function putNextState($id)
    {
		$order = Order::find($id);
		$nextState = OrderController::getNextState($order->orderstate->id);
		if ($nextState) {
			$order = $order->update(["order_state_id" => OrderController::$orderStates[$nextState]]);
			$historicState = HistoricState::create([
				"order_id" => $id,
				"order_state_id" => OrderController::$orderStates[$nextState]
			]);
		}
        return back();
    }
}
