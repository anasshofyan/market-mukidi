<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $params =[
            'title' => 'Dashboard | Orders',
            'subtitle' => 'Orders'
        ];
        return view('admin.orders', $params);
    }
}
