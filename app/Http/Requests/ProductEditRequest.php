<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'slug' => 'required|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/|max:30',
            'product_id' => 'required',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:500',
            'image.*'      => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'seo_title' => 'nullable|string|max:255',
            'seo_meta_keyword' => 'nullable|string|max:255',
            'seo_meta_desc' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'slug.required' => 'Slug không được trống',
            'slug.regex' => 'Slug không đúng định dạng',
            'slug.max' => 'Chỉ được nhập tối đa 30 ký tự',

            'name.required' => 'Tiêu đề không được trống',
            'name.max' => 'Tiêu đề có độ dài tối đa 100 ký tự',

            'description.required' => 'Nội dung không được trống',
            'description.max' => 'Nội dung có độ dài tối đa 500 ký tự',

            'image.image' => 'Chỉ được chọn ảnh',
            'image.mimes' => 'Chỉ được chọn ảnh có đinh dạng là: jpeg,png,jpg,gif',

            'seo_title.max' => 'Tiêu đề SEO có độ dài tối đa 255 ký tự',

            'seo_meta_keyword.max' => 'Meta SEO có độ dài tối đa 255 ký tự',

            'seo_meta_desc.max' => 'Mô tả SEO có độ dài tối đa 255 ký tự',

        ];
    }
}
