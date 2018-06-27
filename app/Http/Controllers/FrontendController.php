<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['featured'] = Product::where('featured',1)->orderBy('id','desc')->SimplePaginate(4);
        $data['new'] = Product::orderBy('id','desc')->Paginate(8);
        return view('frontend.home',$data);
    }

    public function getDetails($id)
    {
        $data['item'] = Product::find($id);
        return view('frontend.details',$data);
    }
}
