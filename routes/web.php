<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;

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

Route::get('/', HomeController::class);

Route::get('inventario', [InventarioController::class, 'index']);

Route::get('inventario/create', [InventarioController::class, 'create']);

Route::get('inventario/{categoria}', [InventarioController::class, 'show']);
/*
Route::get('inventario/{categoria}', function ($categoria) {
    return "Bienvenido a la categoria $categoria ";
});*/