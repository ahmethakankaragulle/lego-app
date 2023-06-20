<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/editor', function () {
    return view('image-editor');
});

Route::get('/sepet', function () {
    return view('cart')->with([
        'baskets' => auth()->user()->baskets()->whereStatus(0)->get(),
        'products' => auth()->user()->products()->whereStatus(0)->get(),
    ]);
})->middleware('auth');

Route::get('/product', function () {
    return view('product-detail');
});

Route::get('/products', [ProductController::class, 'listActiveProducts']);

Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('product-detail');

Route::get('/orders', function () {
    return view('my-orders');
});