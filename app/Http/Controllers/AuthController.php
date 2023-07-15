<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function handleRegister(Request $request) {
        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|min:3|same:re-password',
        ]);
        User::create([
            'name' => 'name',
            'email' => 'email',
            'password' => bcrypt('password'),
        ]);

        return redirect(route('login'))->with('msg','Successful');
    }

    public function handleLogin(Request $request) {
        $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|min:3|same:re-password',
        ]);
        
    }
}
