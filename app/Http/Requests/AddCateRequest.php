<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //tạo ra các quy tắc
            // unique gồm 2 tham số , tên bảng và cột cần validate
            'name'=>'unique:vp_categories,cate_name'
        ];
    }

    // thêm một hàm xử lý in ra lỗi 
    public function message()
    {
        return [
            'name.unique' => 'Tên Danh Mục Đã Tồn Tại'
        ];
    }
}
