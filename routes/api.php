<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\MarcaController;
use App\Http\Controllers\Api\CategoriaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//si un grupo de rutas usa el mismo controlador se usa el mismo controlador
Route::controller(ProductController::class)->group(function (){
    Route::get('/products', 'index');
    Route::post('/product', 'store');
    Route::get('/product/{id}', 'show');
    Route::put('/product/{id}', 'update');
    Route::delete('/product/{id}', 'destroy');
});

//grupo de rutas de marca
Route::controller(MarcaController::class)->group(function (){
    Route::get('/marcas', 'index');
    Route::post('/marca', 'store');
    Route::get('/marca/{id}', 'show');
    Route::put('/marca/{id}', 'update');
    Route::delete('/marca/{id}', 'destroy');
});

//grupo de rutas de categoria
Route::controller(CategoriaController::class)->group(function (){
    Route::get('/categorias', 'index');
    Route::post('/categoria', 'store');
    Route::get('/categoria/{id}', 'show');
    Route::put('/categoria/{id}', 'update');
    Route::delete('/categoria/{id}', 'destroy');
});