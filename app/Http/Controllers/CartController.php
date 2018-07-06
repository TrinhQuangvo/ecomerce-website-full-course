<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        $data['total'] = Cart::total();
        $data['item'] = Cart::content();
        return view('frontend.cart',$data);
    }
    public function getDelete($id)
    {
        if($id=='all')
        {
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $req)
    {
        Cart::update($req->rowId,$req->qty);
    }
}
