<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listActiveProducts(){
        $products=Product::where("is_active",1)->get();
        return view('products-list', compact('products'));
    }
}
