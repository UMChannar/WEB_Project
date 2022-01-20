<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public function show(Pizza $pizza)
    {
        $pizza = Pizza::all();
        return view('admin', ['pizza' => $pizza]);
    }
    public function update(Request $request, Pizza $pizza, $id)
    {
        $change = 'Complete';
        $pizza = Pizza::find($id);
        $pizza->status = $change;
        $pizza->save();
        return redirect(route('admin'));
    }
}
