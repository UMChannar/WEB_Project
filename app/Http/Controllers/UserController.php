<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(User $user)
    {
        $id = Auth::id();
        $user = User::where('id', $id)->get();
        return view('profile', compact('user'));
    }
    public function edit(User $user)
    {
        $id = Auth::id();
        $user = User::where('id', $id)->get();
        return view('update', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect(route('profile'));
    }
    public function destroy(User $user)
    {
        $id = Auth::id();
        $user = User::where('id', $id)->delete();
        return redirect(route('login'));
    }
}
