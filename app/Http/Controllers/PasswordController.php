<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function create()
    {
        return view('password.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed'
        ]);

        $user = auth()->user();

        $user->password = Hash::make($request->password);
        $user->save();
        
        session()->flash('message', 'Password updated successfully');

        return back();
    }
}
