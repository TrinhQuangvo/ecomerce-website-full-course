<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
//lấy danh mục 
use App\Models\Category;
class ProductController extends Controller
{

    public function getProduct()
    {
        return view('backend.product');
    }

    public function getAddProduct()
    {
        $data['catelist'] = Category::all();
        return view('backend.addproduct',$data  );
    }

    public function postAddProduct(AddProductRequest $request)
    {
        // lấy tên ảnh 
        $filename= $request->img->getClientOriginalName();
        // tạo request đê validate form 
        $product = new Product;
        $product->prod_name	 = $request->name;
        $product->prod_slug  = str_slug($request->name);
        $product->img = $filename;
        $product->accessories = $request->accessories;
        $product->price = number_format($request->price);
        $product->warranty = $request->warranty;
        $product->promotion = $request->promotion;
        $product->condition = $request->condition; 
        $product->status = $request->status;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $product->cate_id = $request->cate;     
        $product->save();

        // upload ảnh 
        $request ->img ->storeAs('avatar',$filename);
    }

    public function getEditProduct()
    {
        return view('backend.editproduct');
    }

    public function postEditProduct()
    {
        
    }

    public function getDeleteProduct()
    {
         
    }
}
