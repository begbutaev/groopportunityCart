<?php


namespace App\Classes;


use App\Models\Cart;
use App\Models\Product;

class Basket
{
    protected $cart;

    public function __construct()
    {
        $this->cart = Cart::get()->first();

    }

    public function getCart()
    {
        return $this->cart;
    }

    protected function getPivotRow($product)
    {
        return $this->cart->products()->where('product_id', $product->id)->first()->pivot;
    }

    public function addProduct(Product $product)
    {
        if ($this->cart->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $this->cart->products()->attach($product->id);
        }
    }

    public function removeProduct(Product $product)
    {

        if ($this->cart->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            if ($pivotRow->count < 2) {
                $this->cart->products()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
    }
}
