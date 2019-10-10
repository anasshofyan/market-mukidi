<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationsController extends Controller
{
    public function index(){
        $params = [
            'title' => 'Dashboard | Integrations',
            'subtitle' => 'Integrations'
        ];
        return view("admin.integrations", $params);
    }
}
