<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $params = [
            'title' => 'Dashboard | Customers',
            'subtitle' => 'Customers',
        ];
        return view("admin.customers", $params);
    }
}
