<?php

use App\Http\Controllers\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/logout', [Logout::class, 'kick'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'match']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/order', [PizzaController::class, 'index'])->name('order');
Route::post('/order', [PizzaController::class, 'store']);
Route::get('/orderH', [PizzaController::class, 'show'])->name('orderh');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [UserController::class, 'show'])->name('profile');
Route::get('/edit', [UserController::class, 'edit'])->name('edit');
Route::post('/update', [UserController::class, 'update'])->name('update');
Route::get('/delete', [UserController::class, 'destroy'])->name('dlt');

Route::get('/admin', [AdminController::class, 'show'])->name('admin');
Route::get('update/{id}', [AdminController::class, 'update']);

