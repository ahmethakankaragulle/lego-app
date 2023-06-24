<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function listMyOrders(){
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        foreach ($orders as $order) {
            $orderItems = $order->orderItems;
            foreach ($orderItems as $orderItem) {
                $product = $orderItem->products;
                // Ürün bilgilerini kullanarak gerekli işlemleri yapabilirsiniz.
            }
        }
    }

    public function listAllOrders(){
        $orders= Order::get();
        return view('order-list', compact('orders'));
    }
}
