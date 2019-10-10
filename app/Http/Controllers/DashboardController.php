<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $params = [
            'title' => 'Dashboard Admin',
            'subtitle' => 'Dashboard'
        ];
        return view("admin.dashboard", $params);
    }
}
