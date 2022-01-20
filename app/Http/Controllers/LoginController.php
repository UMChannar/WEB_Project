<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function match(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid Login details');
        }
        echo("Success");
        // return redirect()->route('order');
    }
}
