<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Support\Str as Str;

class ProductsController extends Controller {

    public function index() {

        return view('admin.admin');
    }

    public function products() {
        $products = \App\Product::all();
        return view('admin.products', ['products' => $products]);
    }

    public function store(ProductStoreRequest $request) {
        $datos = $request->all();        
        if ($request->exists("id")) {
            DB::table('users')
                    ->where('id', $request->input("id"))
                    ->update($request->all());
        } else {            
            $datos["status"] = 1;
            $datos["slug"] = \Str::slug($datos["name"]);
            $product = \App\Product::create($datos);
            if (isset($datos['file'])) {
                $product->addMediaFromRequest('file')->toMediaCollection('files');
            }
        }
        $respuesta = ["state" => 1];
        return response()->json($respuesta);
    }

}
