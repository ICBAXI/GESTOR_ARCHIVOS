<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
/* Route::get('/', function () {
return view('welcome');
}); */
Route::resource('upload-file', UploadController::class)
    ->parameters(['upload-file' => 'upload'])
    ->names('files');


/* Route::get('/upload-file', [HomeController::class, 'createForm']);
Route::post('/upload-file', [HomeController::class, 'fileUpload'])->name('fileUpload'); */
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');
Auth::routes();