<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/create/blog',[\App\Http\Controllers\BlogController::class, 'newBlog'])->name('blog.create');
Route::get('/delete/blog/{id}',[\App\Http\Controllers\BlogController::class, 'delete'])->name('blog.del');
Route::post('/create/blog',[\App\Http\Controllers\BlogController::class, 'create'])->name('create.blog');
Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blogs.list');
Route::get('/posts/{blog}', [\App\Http\Controllers\PostController::class, 'index'])->name('blog_posts.list');
Route::get('/post/delete/{id}', [\App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');
Route::get('/post/{blog}/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create.post');
Route::post('/post/{blog}', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
