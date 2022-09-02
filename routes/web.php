<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductReview;

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


$Usercount=User::all()->count();
$Productcount=Product::all()->count();
$ProductReviewcount=ProductReview::all()->count();
Route::get('/', fn () => view('home',[
    'Usercount' => $Usercount,
    'Productcount' => $Productcount,
    'ProductReviewcount' => $ProductReviewcount
]));
Route::get('/about', fn () => view('about'));
Route::get('/gallery', fn () => view('gallery'));

Route::get('/dashboard', fn () => 'dashboard')
    ->name('dashboard')
    ->middleware('kmkey');

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users/{id}/update', [UserController::class, 'update'])->name('users.update');
Route::get('users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::post('usersimport/', [UserController::class, 'importUser'])->name('import.user');
Route::get('usersexport/', [UserController::class, 'export'])->name('export.user');
Route::get('products', [ProductController::class, 'index']);
Route::get('product/product', [ProductController::class, 'show']);

