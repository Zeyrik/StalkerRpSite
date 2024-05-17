<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function show($id){
        $product = Product::find($id);
        return view('product', compact('product'));
    }

}
