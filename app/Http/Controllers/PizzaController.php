<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orderPizza');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha_num|max:255',
            'pizza' => 'required|alpha_num|max:255',
            'topping1' => 'required|alpha_num|max:255',
            'topping2' => 'required|alpha_num|max:255',
            'topping3' => 'required|alpha_num|max:255',
        ]);
        Pizza::create([
            'name' => $request->name,
            'pizza' => $request->pizza,
            'topping1' => $request->topping1,
            'topping2' => $request->topping2,
            'topping3' => $request->topping3,
            'status' => $request->status,
        ]);
        return redirect(route('orderh'));
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza, User $user)
    {
        $id = Auth::id();
        $user = User::where('id', $id)->get();
        $u = $user[0]->name;
        $pizza = Pizza::where('name', $u)->get();
        return view('orderHistory', ['pizza' => $pizza]);
    }
}
