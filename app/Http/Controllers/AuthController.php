<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function handleRegister(Request $request) {
        $request->validate([
            'name'=>'required|unique:users,name',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:3|same:re-password',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('login'))->with('msg','Successful');
    }

    public function handleLogin(Request $request): RedirectResponse {
        $request->validate([
            'name_or_email'=>'required|max:255|','sometimes|email',
            'password'=>'required|min:3|',
        ]);
        $field = Str::contains($request->name_or_email, '@') ? 'email' : 'name';

        if (Auth::attempt([$field => $request->name_or_email, 'password' => $request->password],true)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('msg','succesfully login');
        }
        return back()->withErrors([
            'name_or_email' => 'The provided credentials do not match our records.',
        ])->onlyInput('name_or_email');
    }

    public function handleLogout(Request $request): RedirectResponse{

        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect(route('login'));
    }
}
