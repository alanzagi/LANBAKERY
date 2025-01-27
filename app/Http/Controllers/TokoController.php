<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function showToko()
    {
        return view('toko', [
            'title' => 'Toko Kami'
        ]);
    }
}
