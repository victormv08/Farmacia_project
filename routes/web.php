<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('categoria', App\Http\Controllers\CategoriumController::class)->middleware('auth');
Route::resource('categoriaPublica', App\Http\Controllers\CategoriumPublicaController::class);
Route::resource('productoPublic', App\Http\Controllers\ProductoPublicaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


