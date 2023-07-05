<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use Intervention\Image\Facades\Image as Image;


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
})->middleware('auth');

Route::get('/sepet', function () {
    return view('cart')->with([
        'baskets' => auth()->user()->baskets()->whereStatus(0)->get()
    ]);
})->middleware('auth');

Route::get('/product', function () {
    return view('product-detail');
});

Route::get('/products', [ProductController::class, 'listActiveProducts']);

Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('product-detail');

Route::get('/orders', function () {
    return view('my-orders')->with([
        'orders' => auth()->user()->orders()->whereStatus(0)->get()
    ]);
})->middleware('auth');

Route::get('/order-list', [OrderController::class, 'listAllOrders']);

Route::get('/product-list', [ProductController::class, 'listAllProducts']);

Route::get('/messages', [MessageController::class, 'listAllMessage']);


Route::post('/art/push', function (\Illuminate\Http\Request $request) {

    $filename = (string) auth()->user()->id . "-" . now()->format('Y-m-dHis');
    $dataurl = "storage/arts/" . $filename . ".png";
    $image = Image::make($request->image)->encode('png');
    $image->save($dataurl);
    $pieces = $request->collect('data')->sum(function ($item) {
        return $item[3];
    });
    $request->user()->arts()->create([
        'user_id' => auth()->user()->id,
        'image' => $dataurl,
        'data' => $request->data,
        'price' => $pieces * 0.2,
        'name' => "{$pieces} parça TransLego paketi"
    ]);

    return $request->user()->arts()->whereStatus(0)->get();
})->middleware('auth');


//Route::post('/art/push', [UserArtController::class, 'create']);

Route::post('/basket/push', function (\Illuminate\Http\Request $request) {

    $request->user()->baskets()->create([
        'user_id' => auth()->user()->id,
        'item_id' => $request->art_id,
        'item_type' => 1,
        'count' => 1,
    ]);
    return $request->user()->baskets()->whereStatus(0)->get();
})->middleware('auth');
