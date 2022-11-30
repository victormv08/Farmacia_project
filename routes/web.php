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

/*Route::get('/', function () {
    return view('index');
});*/
Route::resource('/', App\Http\Controllers\ProductoPublicaController::class);



Auth::routes();

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::resource('categoria', App\Http\Controllers\CategoriumController::class)->middleware('auth');
Route::resource('categoriaPublica', App\Http\Controllers\CategoriumPublicaController::class);
Route::resource('productoPublic', App\Http\Controllers\ProductoPublicaController::class);
Route::view('/graficaApi', 'grafica')->name('grafica');
Route::get('download-pdf', 'App\Http\Controllers\ProductoController@generar_pdf')->name('descarga-pdf')->middleware('auth');
Route::get('download-pdfCat', 'App\Http\Controllers\CategoriumController@generar_pdfcat')->name('descarga-pdfcat')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


