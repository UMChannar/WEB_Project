<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Logout extends Controller
{
    public function kick()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
