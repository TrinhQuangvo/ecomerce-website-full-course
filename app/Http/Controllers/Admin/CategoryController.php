<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    public function getCate()
    {
        // lấy ra danh sách của category trong bảng vp_categỏies
        $data['catelist'] = Category::all();    
        return view('backend.category',$data);
    }

    public function postCate(AddCateRequest $req)
    {
        // khởi tạo đối tượng $req từ class AddCateRequest
        // để thêm dữ liệu sử dụng model 
        $category = new Category;
        $category->cate_name = $req->name;
        $category->cate_slug = str_slug($req->name);
        $category->user = $req->user;
        dd($category);
        $category->save();
        return back();
    }
    
    public function getEditCate($id)
    {
        // sử dụng lại model cate'=
        $data['cate'] = Category::find($id);
        return view('backend.editcategory',$data);
    }

    public function postEditCate(EditCateRequest $req,$id)
    {
        $category = Category::find($id);
        $category->cate_name = $req->name;
        $category->cate_slug = str_slug($req->name);
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCate($id)
    {
        Category::destroy($id);
        return back();
    }

    public function del(Request $req)
    {
        $del = $req -> input('del');
        Category::whereIn('id',$del)->delete();
        return back();
    }
}
