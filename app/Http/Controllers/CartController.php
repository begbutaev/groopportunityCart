<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cart = (new Basket())->getCart();
        return view('cart', compact('cart'));

    }

    public function addProductToCart(Product $product) {

        (new Basket())->addProduct($product);
        return redirect()->route('cart-index');
    }

    public function removeProductFromCart(Product $product) {
        (new Basket())->removeProduct($product);
        return redirect()->route('cart-index');

    }
}
