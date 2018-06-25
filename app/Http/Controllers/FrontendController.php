<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['featured'] = Product::where('featured',1)->orderBy('id','desc')->get();
       
        return view('frontend.home',$data);
    }
}
