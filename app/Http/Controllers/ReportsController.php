<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index(){
        $params = [
            'title' => 'Dashboard | Reports',
            'subtitle' => 'Reports'
        ];
        return view("admin.reports", $params);
    }
}
