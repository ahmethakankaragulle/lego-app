<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listActiveProducts()
    {
        $products = Product::where("is_active", 1)->get();
        return view('products', compact('products'));
    }

    public function listAllProducts()
    {
        $products = Product::get();
        return view('product-list', compact('products'));
    }

    public function productDetail($id)
    {
        $product = Product::find($id);

        return view('product-detail', compact('product'));
    }

    public function pushBasket($request)
    {
        auth()->user()->baskets()->create([
            'item_id' => $request->product_id,
            'item_type' => 2,
            'count' => $request->count,
        ]);
        return redirect()->back()->with('success', 'Ürün Sepete Eklendi.');
    }
}
