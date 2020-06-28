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
            $product = \App\Product::find($datos["id"]);
            $product->name = $datos["name"];
            $product->description = $datos["description"];
            $product->price = $datos["price"];
            $product->status = $datos["status"];
            $product->slug = \Str::slug($datos["name"]);
            $product->save();
            if (isset($datos['file'])) {
                $product->addMediaFromRequest('file')->toMediaCollection('files');
            }
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

    public function delete(Request $request, $id) {
        $state = 1;
        $product = \App\Product::find($id);
        if (!$product->delete()) {
            $state = 0;
        }
        $respuesta = ["state" => $state];
        return response()->json($respuesta);
    }

    public function get(Request $request) {
        $products = \App\Product::where('status', 1)->get();        
        $lproducts = [];        
        foreach ($products as $product) {
            $img = $product->image->getUrl();
            $op["id"] = $product->id;
            $op["name"] = $product->name;
            $op["description"] = $product->description;
            $op["slug"] = $product->slug;
            $op["price"] = "$ " . number_format($product->price, 2);
            $op["img"] = $img;
            $lproducts[] = $op;
        }        
        $response = ["products" => $lproducts];
        return response()->json($response);
    }

}
