<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('index', compact('products'));

    }

    public function productShow($code) {
        $product = Product::where('code', $code)->first();
        return view('product', compact('product'));
    }


}
