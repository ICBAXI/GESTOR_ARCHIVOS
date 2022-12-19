<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthentificatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/contact', 'contact')->name('contact');

/* Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); */

Route::resource('blog', PostController::class, [
    'names' => 'post',
    'parameters' => ['blog' => 'post']
]);


Route::view('/about', 'about')->name('about')->middleware('auth');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthentificatedSessionController::class, 'store']);
Route::post('/logout', [AuthentificatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);