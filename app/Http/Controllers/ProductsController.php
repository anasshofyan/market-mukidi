<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $params = [
            'title' => 'Dashboard | Products',
            'subtitle' => 'Products'
        ];
        return view("admin.products", $params);
    }
}
