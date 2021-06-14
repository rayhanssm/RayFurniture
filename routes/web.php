<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CrafterController;

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

Route::get('/', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store'])->name('product.create');
Route::get('/product', [ProductController::class, 'listProduct'])->name('product.list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/crafter', [CrafterController::class, 'index'])->name('crafter.list');
Route::get('/crafter/create', [CrafterController::class, 'create'])->name('crafter.create');
Route::post('/crafter', [CrafterController::class, 'store'])->name('crafter.store');
Route::get('/crafter/{id}', [CrafterController::class, 'detail'])->name('crafter.detail');
Route::get('/crafter/edit/{id}', [CrafterController::class, 'edit'])->name('crafter.edit');
Route::patch('/crafter/{id}', [CrafterController::class, 'update'])->name('crafter.update');
Route::delete('/crafter/{id}', [CrafterController::class, 'delete'])->name('crafter.delete');