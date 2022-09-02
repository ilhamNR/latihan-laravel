<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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



Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));

Route::get('/dashboard', fn () => 'dashboard')
    ->name('dashboard')
    ->middleware('kmkey');

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('usersimport/', [UserController::class, 'importUser'])->name('import.user');
Route::get('usersexport/', [UserController::class, 'export'])->name('export.user');
Route::get('products', [ProductController::class, 'index']);
Route::get('product/product}', [ProductController::class, 'show']);

