<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\RefundsController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';





//Products
Route::get('/catalog', [ProductsController::class, 'index']);
Route::get('/create', [ProductsController::class, 'create']);
Route::post('/', [ProductsController::class, 'store']); //INSERT DATA
Route::get('/catalog/{id}/edit', [ProductsController::class, 'edit']);
Route::patch('/catalog/{id}/update', [ProductsController::class, 'update']);
Route::get('{id}/delete', [ProductsController::class, 'delete']);


//Sales
Route::get('/sales', [SalesController::class, 'index']);
Route::get('/sales/create', [SalesController::class, 'create']);
Route::post('/sales', [SalesController::class, 'store']);
Route::get('/sales/{id}/edit', [SalesController::class, 'edit']);
Route::patch('/sales/{id}/update', [SalesController::class, 'update']);
Route::get('/sales/{id}/delete', [SalesController::class, 'delete']);

//REFUND
Route::get('/refunds', [RefundsController::class, 'index']);
Route::get('/refunds/create', [RefundsController::class, 'create']);
Route::post('/refunds', [RefundsController::class, 'store']);
Route::get('/refunds/{id}/edit', [RefundsController::class, 'edit']);
Route::patch('/refunds/{id}/update', [RefundsController::class, 'update']);
Route::get('/refunds/{id}/delete', [RefundsController::class, 'delete']);