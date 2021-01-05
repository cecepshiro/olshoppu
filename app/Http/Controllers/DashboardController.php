<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function detail(){
        return view('detail');
    }

    public function cart(){
        return view('cart');
    }

    public function produk(){
        return view('produk');
    }
}
