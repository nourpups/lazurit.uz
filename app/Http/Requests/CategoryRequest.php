<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        // не заудь добавить mimes:webp
        $rules = [
            'image' => 'required',
            'image_breadcrumb' => 'required',
        ];

        foreach(config('translatable.locales') as $locale) {
            $rules[$locale . '.name'] = ['required','min:4','unique:products,name'];
            $rules[$locale . '.description'] = 'required|string';
        }
        if($this->route()->named('category.edit'))
        {
            $excepted_id = $this->route()->parameter('id');
            foreach (config('translatable.locales') as $locale) {
                $rules[$locale . '.name'] = ['required', 'min:4', Rule::unique('categories', 'name')->ignore($excepted_id)];
            }
        }
        return $rules;
    }
}
