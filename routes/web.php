<?php

use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/register','auth.register')->name('register');
Route::post('/register',[AuthController::class,'handleRegister'])->name('register.post');

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthController::class,'handleLogin'])->name('login.post');

Route::post('/logout',[AuthController::class,'handleLogout'])->name('logout.post');

Route::prefix('admin')->middleware('auth.checker')->group(function(){
    Route::view('/','admin.index')->name('admin.dashboard');
    
});

Route::view('/','frontend.index')->name('home');

