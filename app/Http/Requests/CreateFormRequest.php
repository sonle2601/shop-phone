<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'ProName' => 'required',
            'ProImage' => 'required',
            'ProInfo' => 'required',
            'ProDes' => 'required',
            'ProPrice' => 'required',
            'ProCate'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'ProName.required' => 'Tên sản phẩm không được để trống',
            'ProImage.required' =>'Chưa có file ảnh được chọn',
            'ProCate.required'=>'Vui lòng chọn danh mục sản phẩm'

        ];
    }
}