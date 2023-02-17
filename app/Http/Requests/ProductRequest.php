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
            $rules[$locale . '.name'] = ['required','min:4','unique:products,name'];
            $rules[$locale . '.description'] = 'required';
        }
        if($this->route()->named('product.edit'))
        {
            $excepted_id = $this->route()->parameter('id');
            foreach (config('translatable.locales') as $locale) {
                $rules[$locale . '.name'] = ['required', 'min:4', Rule::unique('products', 'name')->ignore($excepted_id)];
                $rules['image'] = 'image|max:1024';
            }
        }
        return $rules;
    }
}
