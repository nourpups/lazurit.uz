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
            'image' => 'required|image|max:1024',
        ];

        foreach(config('translatable.locales') as $locale)
        {
            $rules[$locale . '.name'] = ['required','min:3','unique:category_translations,name'];
        }
        if($this->route()->named('category.edit'))
        {
            $category = $this->route()->parameter('product');
            $excepted_id = $category['id'];
            foreach (config('translatable.locales') as $locale) {
                $rules[$locale . '.name'] = ['required', 'min:3', Rule::unique('category_translations', 'name')->ignore($excepted_id, 'category_id')];
            }
        }
        return $rules;
    }
}
