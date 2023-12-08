<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    public function index () {
        $product=Product::get () ;
        return view('product.index', compact('product'));
    }

    public function create () {
        return view ('product.create');
    }

    public function store (Request $request) {
        Product::create ([
            'product' => $request->product,
            'price'   => $request->price,
            'stock'   => $request->stock,
        ]);

    return redirect ('/product');
    }
}
