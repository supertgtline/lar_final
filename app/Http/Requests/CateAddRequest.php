<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CateAddRequest extends Request
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
            'txtCateName' =>'required|required:qt64_category,name'
        ];
    }
    public function messages(){
        return [
            'txtCateName.required' => ' Vui long nhập Danh Mục',
            'txtCateName.unique'  => ' Ten danh mục phải là duy nhất',
        ];
    }
}
