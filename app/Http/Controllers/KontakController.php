<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function showKontak()
    {
        return view('kontak', [
            'title' => 'Kontak'
        ]);
    }
}
