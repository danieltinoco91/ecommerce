<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function index() {
        return view('index');
    }

    public function product(Request $request, $slug) {
        $product = \App\Product::where('slug', $slug)->first();

        return view('producto', ['product' => $product]);
    }

    public function checkout() {
        return view('checkout');
    }

}
