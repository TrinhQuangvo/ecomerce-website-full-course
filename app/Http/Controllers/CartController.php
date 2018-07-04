<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Cart; 

class CartController extends Controller
{
    public function getAddCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1,
         'price' => $product->price, 'options' => ['img' => $product->img]]);
        return redirect('cart/show');
    }

    public function getShowCart()
    {
        return view('frontend.cart');
    }
}
