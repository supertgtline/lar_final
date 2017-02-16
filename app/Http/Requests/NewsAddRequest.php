<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsAddRequest extends Request
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
            'sltCate' =>'required',
            'txtTitle'=> 'required|unique:qt64_news,title',
            'txtAuthor'=>'required',
            'txtIntro' => 'required',
            'txtFull' => 'required',
            'newsImg' =>'required|image|mimes:jpeg,bmp,png,jpg',

        ];
    }
    public function messages(){
        return [
            'sltCate.required' => 'Vui long chon danh muc',
            'txtTitle.required' => 'Vui long nhap Title',
            'txtTitle.unique' => 'Tieu de nay da ton tai',
            'txtAuthor.required' => 'Vui lòng chọn Author',
            'txtIntro.required' => 'Vui lòng nhập tóm tắt tin',
            'txtFull.required' => 'Vui lòng nhập nội dung tin',
            'newsImg.required' => 'Vui lòng nhập hình ảnh',
            'newsImg.image' => 'Đây phải là định dạng hình',
            'newsImg.mines' => 'Hình của bạn phải là một trong các dịnh dạng sau jpeg,bmp,png,jpg',

        ];
    }
}
