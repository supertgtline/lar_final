<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsEditRequest extends Request
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

    public function rules()
    {
        return [
            'sltCate' =>'required',
            'txtTitle'=> 'required',
            'txtAuthor'=>'required',
            'txtIntro' => 'required',
            'txtFull' => 'required',
            'newsImg' =>'|image|mimes:jpeg,bmp,png,jpg',

        ];
    }
    public function messages(){
        return [
            'sltCate.required' => 'Vui long chon danh muc',
            'txtTitle.required' => 'Vui long nhap Title',
            'txtAuthor.required' => 'Vui lòng chọn Author',
            'txtIntro.required' => 'Vui lòng nhập tóm tắt tin',
            'txtFull.required' => 'Vui lòng nhập nội dung tin',
            
            'newsImg.mines' => 'Hình của bạn phải là một trong các dịnh dạng sau jpeg,bmp,png,jpg',

        ];
    }
}

