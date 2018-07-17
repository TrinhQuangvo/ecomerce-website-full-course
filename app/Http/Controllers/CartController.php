<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart; 
use Mail;

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

    public function postComplete(Request $req)
    {
        $data['info'] = $req->all();
        Mail::send('fronend.email',$data,function($message) use ($email){
            $message->from('voquang1406@gmail.com','Trịnh Quang Võ');
            $message->to($email,$email);
            $message->cc('Trịnh Quang','ahihi');
            $message->subject('Xác Nhận Hóa Đơn Mua Hàng');
        });
    }
}
