<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('newreq',[MyController::class, 'myfunction']);


Route::get('/posts', [PostController::class, 'index'])->name('posts.all');
Route::post('/posts', [PostController::class, 'store'])->name('post.add');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.delete');


Route::get('/products', [ProductController::class, 'index'])->name('product.all');
Route::post('/products', [ProductController::class, 'store'])->name('product.add');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.delete');
