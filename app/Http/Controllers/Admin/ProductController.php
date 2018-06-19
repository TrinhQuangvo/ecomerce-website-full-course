<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
//lấy danh mục 
use App\Models\Category;
class ProductController extends Controller
{

    public function getProduct()
    {
        // sử dụng thư viện DB để join 2 bảng prod và cate
        $data['productlist'] = DB::table('vp_categories')
            ->join('vp_products','vp_products.cate_id','=','vp_categories.id')
            ->get();
            
        return view('backend.product',$data);
        
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
        $product->price = $request->price;
        $product->warranty = $request->warranty;
        $product->promotion = $request->promotion;
        $product->condition = $request->condition; 
        $product->status = $request->status;
        $product->description = $request->description;
        $product->featured = $request->featured;
        $product->cate_id = $request->cate;  
        // dẫn ảnh vào thư mục trong phần strorage   
        $product->save();
        $request->img->storeAs('public',$filename);
        return back();
    }

    public function getEditProduct($id)
    {
        $data ['product'] = Product::find($id);
        $data ['listcate']= Category::all();
        return view('backend.editproduct',$data);
    }

    public function postEditProduct(Request $request , $id)
    {
        $product = new Product;
        // đưa thông tin vào 1 mảng 
        $arr['prod_name']=$request->name;
        $arr['prod_slug']=str_slug($request->name);
        $arr['price']=$request->price;
        $arr['accessories']=$request->accessories;
        $arr['promotion']=$request->promotion;
        $arr['warranty']=$request->warranty;
        $arr['condition']=$request->condition;
        $arr['status']=$request->status;
        $arr['promotion']=$request->promotion;
        $arr['description']=$request->description;
        $arr['cate_id'] = $request->cate;
        $arr['featured'] = $request->featured;
        if($request->hasFile('img'))
        {
            $img = $request->img->getClientOriginalName();
            $arr['img']= $img;
            $request->img->storeAs('public',$img);
        }
        $product::where('id',$id)->update($arr); 
        return redirect('admin/product');
    }

    public function getDeleteProduct($id)
    {
        product::destroy($id);
        return back();
    }
}
