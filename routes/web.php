<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
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
Route::get('/posts/update/{id}', [PostController::class, 'toUpdate'])->whereNumber('id')->name("post.update");
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name("post.show");
Route::get('/video/{id}', [VideoController::class, 'show'])->whereNumber('id')->name("video.show");
Route::get('/posts/delete/{id}', [PostController::class, 'delete'])->whereNumber('id')->name("post.delete");
Route::get('/videos/delete/{id}', [VideoController::class, 'delete'])->whereNumber('id')->name("video.delete");
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::post('/posts/create', [PostController::class, 'store'])->name("post.store");
Route::post('/videos/create', [VideoController::class, 'store'])->name("video.store");
Route::post('/posts/update/{id}', [PostController::class, 'update'])->whereNumber('id')->name("post.update");
Route::post('/videos/update/{id}', [VideoController::class, 'update'])->whereNumber('id')->name("video.update");
Route::post('/post/{id}/comment', [CommentController::class, 'store'])->name("comment.store");
