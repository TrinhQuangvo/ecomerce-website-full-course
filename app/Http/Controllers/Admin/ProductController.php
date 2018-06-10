<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function getProduct()
    {
        return view('backend.product');
    }

    public function getAddProduct()
    {
        return view('backend.addproduct');
    }

    public function postAddProduct()
    {
        // tạo request đê validate form 
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
