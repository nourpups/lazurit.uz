<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'category_id' => 'required',
            'image' => 'required|image|max:1024',
            'price' => 'required|numeric',
        ];

        foreach(config('translatable.locales') as $locale) {
            $rules[$locale . '.name'] = ['required','min:3','unique:product_translations,name'];
            $rules[$locale . '.description'] = 'required';
        }
        if($this->route()->named('product.edit'))
        {
            $product = $this->route()->parameter('product');
            $excepted_id = $product['id'];
            $excepted_column = 'product_id';
            foreach (config('translatable.locales') as $locale) {
                $rules[$locale . '.name'] = ['required', 'min:3', Rule::unique('product_translations', 'name')->ignore($excepted_id, $excepted_column)];
            }
            $rules['image'] = 'image|max:1024';

        }

        return $rules;
    }
}
