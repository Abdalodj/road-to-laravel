<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name("post.create");
Route::post('/posts/create', [PostController::class, 'store'])->name("post.store");
Route::get('/posts/update/{id}', [PostController::class, 'toUpdate'])->whereNumber('id')->name("post.update");
Route::post('/posts/update/{id}', [PostController::class, 'update'])->whereNumber('id')->name("post.update");
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name("post.show");
Route::get('/posts/delete/{id}', [PostController::class, 'delete'])->whereNumber('id')->name("post.delete");
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
