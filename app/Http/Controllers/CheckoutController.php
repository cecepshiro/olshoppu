<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function detail(){
        return view('checkout.detail');
    }

    public function shipping(){
        return view('checkout.shipping');
    }

    public function payment(){
        return view('checkout.payment');
    }

    public function review(){
        return view('checkout.review');
    }

    public function complete(){
        return view('checkout.complete');
    }
}
