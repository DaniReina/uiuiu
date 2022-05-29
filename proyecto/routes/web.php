<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartController;

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
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/atencion', function () {
    return view('atencion');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/carrito', function () {
    return view('carrito');
});
Route::get('/compras', function () {
    return view('compras');
});
Route::get('/welcome2', function () {
    return view('welcome2');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/LOPD', function () {
    return view('LOPD');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('student',StudentController::class);

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
