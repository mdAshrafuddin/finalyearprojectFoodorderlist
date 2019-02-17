<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderControler extends Controller
{
    public function index()
    {
        $oreders = Order::all();
        return view('admin.order.order_index',compact('oreders'));
    }
}
