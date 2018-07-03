<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    public function getHome()
    {
        $data['featured'] = Product::where('featured',1)->orderBy('id','desc')->limit(4)->get();
        $data['new'] = Product::orderBy('id','desc')->Paginate(8);
        $data['category'] = Category::all();
        return view('frontend.home',$data);
    }

    public function getDetails($id)
    {
        $data['item'] = Product::find($id);
        return view('frontend.details',$data);
    }

    public function getCategory($id)
    {
        $data['item'] = Product::where('cate_id',$id)->orderBy('cate_id','desc')->paginate(8);
        return view('Frontend.category',$data); 
    }

    public function getResult(Request $req)
    {
        $result = $req->result;
        $data['keyword']=$result;
        $result = str_replace(' ','%',$result);
        $data['items']=Product::where('prod_name','like','%'.$result.'%')->get();
        return view('frontend.search',$data);
    }
}
