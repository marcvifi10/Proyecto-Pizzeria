<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TypeUser;
use App\Franchise;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$users = User::Get();
        return view("backend.users.index", compact("users"));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$user = User::find($id);
        return view("backend.users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$user = User::find($id);
		$userTypes = TypeUser::get();
		$franchises = Franchise::get();
		return view("backend.users.edit", compact("user", "userTypes", "franchises"));
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
        $user = User::find($id);
        $validator = Validator::make($request->all(), $user->updateRules());
        if ($validator->fails()) {
            return redirect(route("admin.users.edit", $id))
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
			'name' => $request->name,
            'email' => $request->email,
			'address' => $request->address,
			'franchise_id' => $request->franchise_id
		];
		if ($request->type_user_id) {
			$data['type_user_id'] = $request->type_user_id;
		}
		$user = $user->update($data);
        return redirect(route("admin.users.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route("admin.users.index"));
    }
}
