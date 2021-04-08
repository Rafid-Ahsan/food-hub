<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = DB::table('menus')
            ->join('orders', 'menus.id', '=', 'orders.menu_id')
            ->where('orders.status', 'waiting')
            ->get();

        return view('order.index', [
            'orders' => $orders
        ]);
    }


    public function store(Request $request) {
        Order::create([
            'menu_id' => $request->id,
            'status' => 'waiting'
        ]);

        return redirect()->route('welcome')->with('status', 'Your order has been added');
    }

    public function update(Request $request, Order $order) {
        $order->update([
            'status' => 'confirmed'
        ]);

        return redirect()->route('admin')->with('status', 'Your order has been confirmed');
    }
}
