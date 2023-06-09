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
})->name('anasayfa');

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

Route::get('/ürün', function () {
    return view('product-detail');
});

Route::get('/ürünler', [ProductController::class, 'listActiveProducts']);

Route::get('/ürünler/{id}', [ProductController::class, 'productDetail'])->name('product-detail');

Route::get('/message/{id}', [MessageController::class, 'deleteMessage'])->name('delete-message');

Route::get('/siparişlerim', function () {
    return view('my-orders')->with([
        'orders' => auth()->user()->orders()->whereStatus(0)->get()
    ]);
})->middleware('auth');

Route::get('/sipariş-listesi', [OrderController::class, 'listAllOrders']);

Route::get('/ürün-listesi', [ProductController::class, 'listAllProducts']);

Route::get('/mesajlar', [MessageController::class, 'listAllMessage']);

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


Route::get('/sepet', function () {
    return view('cart')->with([
        'baskets' => auth()->user()->baskets()->whereStatus(0)->get()
    ]);
})->middleware('auth');

Route::get('/adres-bilgileri', function () {
    return view('address');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::post('/kart-bilgileri', function (\Illuminate\Http\Request $request) {
    
    if(session('address') == null){
        $request->validate(
        [
            'full-name' => 'required|string|max:130|min:5',
            'telephone' => "required|starts_with:05|max:13|min:10",
            'address' => 'required|min:10|max:255|string',
        ],
        [
            'full_name.required' => 'Adınız ve soyadınız alanı zorunludur.',
            'telephone.required' => 'Telefon numarası alanı zorunludur.',
            'address.required' => 'Tam adres alanı zorunludur.',
        ]
        );

        session(['phone' => $request->input('telephone')]);
        session(['name' => $request->input('full-name')]);
        session(['address' => $request->input('address')]);
        
        return view('payment');
    }
    else
        return view('payment');
    
})->name('adres.onay');


Route::post('/sepet-onay', function (\Illuminate\Http\Request $request) {

    $request->validate([
        'name' => 'required|string|max:130|min:6',
        'cart_number' => 'required|numeric|digits:16',
        'month' => 'required|numeric|between:1,12',
        'year' => 'required|numeric|between:2023,2053',
        'cvv' => 'required|digits:3',
    ]);


    $order = new \App\Models\Order();
    $order->user_id = auth()->user()->id;
    $order->name = session('name');
    $order->phone = session('phone');
    $order->address = session('address');
    $order->cargo_tracking = 'Kargo Bilgisi Bulunmuyor';
    $order->save();

    $baskets = auth()->user()->baskets()->whereStatus(0)->get();
    foreach ($baskets as $basket) {
        $order_item = new \App\Models\OrderItem();

        $item_type = $basket->item_type;
        $order_item->order_id = $order->id;
        $order_item->item_id = $basket->item_id;
        $order_item->item_type = $item_type;
        $order_item->count = $basket->count;

        if ($item_type == 1) {
            $art = \App\Models\UserArt::find($basket->item_id);
            $order_item->price = $art->price;
            $order_item->save();
        } else {
            $product = \App\Models\Product::find($basket->item_id);
            $order_item->price = $product->price;
            $order_item->save();
        }

        $basket->status = 1;
        $basket->save();
    }

    return view('orderscomplete');
})->name('ödeme.onay');



Route::get('/sepet/{id}/sil', function ($id) {
    auth()->user()->baskets()->where('id', $id)->delete();
    return back();
})->name('sepet.sil');




Route::get('/sepet-durum/{order}/{status}', function (Order $order, int $status) {
    $order->status = $status;
    $order->save();

    return back();
})->name('siparis.durum');


Route::post('/product/push', function (\Illuminate\Http\Request $request) {

    $count = 1;
    if ($request->count != null) {
        $count = $request->count;
    }
    auth()->user()->baskets()->create([
        'user_id' => auth()->user()->id,
        'item_id' => $request->product_id,
        'item_type' => 2,
        'count' => $count,
    ]);
    return back()->with('success', 'Ürün Sepete Başarıyla Eklendi.');
})->middleware('auth')->name('push-basket');


Route::post('/order-update', function (\Illuminate\Http\Request $request) {
   
    $order = \App\Models\Order::find($request->input('order-id'))->update(['status' => $request->input('order-status')]);
    
    return redirect()->back()->with('success', 'Başarıyla Güncellendi.');

})->name('order.update');

Route::post('/product/push', function (\Illuminate\Http\Request $request) {

    $count = 1;
    if ($request->count != null) {
        $count = $request->count;
    }
    auth()->user()->baskets()->create([
        'user_id' => auth()->user()->id,
        'item_id' => $request->product_id,
        'item_type' => 2,
        'count' => $count,
    ]);
    return back()->with('success', 'Ürün Sepete Başarıyla Eklendi.');
})->middleware('auth')->name('push-basket');


Route::get('/order/{id}/delete', function ($id) {
    $order_items = \App\Models\OrderItem::where('order_id', $id)->delete();

    $order = \App\Models\Order::find($id)->delete();
    
    return redirect()->back()->with('success', 'Başarıyla Silindi.');

})->name('order.delete');

Route::post('/product-update', function (\Illuminate\Http\Request $request) {
   
    $order = \App\Models\Order::find($request->input('order-id'))->update(['status' => $request->input('order-status')]);
    
    return redirect()->back()->with('success', 'Başarıyla Güncellendi.');

})->name('product.update');

Route::post('/product-create', function (\Illuminate\Http\Request $request) {
   
    $product = new \App\Models\Product();
    $product->category_id = $request->input('product-category');
    $product->name = $request->input('product-name');
    $product->is_active = $request->input('product-active');
    $product->count = $request->input('product-count');
    $product->price = $request->input('product-price');
    $product->image_path = "/storage/images/33.png";
    $product->save();
    return redirect()->back()->with('success', 'Ürün Başarıyla Eklendi.');

})->name('product.create');

Route::get('/product/{id}/delete', function ($id) {
    \App\Models\Product::find($id)->delete();
    
    return redirect()->back()->with('success', 'Ürün Başarıyla Silindi.');

})->name('product.delete');

Route::post('/message-send', function (\Illuminate\Http\Request $request) {
    
    $message = new \App\Models\Message();
    $message->name = $request->input('message-name');
    $message->email = $request->input('message-mail');
    $message->message = $request->input('message-text');
    $message->status = 0;
    $message->save();
    return redirect()->back()->with('success', 'Mesaj Başarıyla Gönderildi.');

})->name('message.send');