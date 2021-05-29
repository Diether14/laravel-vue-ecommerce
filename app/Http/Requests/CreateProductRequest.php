<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'                      => 'required',
            'description'               => 'required',
            'price'                     => 'required|integer',
            'stocks'                    => 'required|integer',
            'product_images'            => 'array|min:1',
            'product_images.*.image'    => 'image|mimes:jpg,jpeg.png|max:500000',
            'product_images.*.type'     => 'required',
        ];
    }
}
