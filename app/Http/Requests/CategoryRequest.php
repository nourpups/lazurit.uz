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
      $id = $this->category->id ?? false;

      $rules = [ 'image' => ($id ? "" : "required").'|image|max:1024' ];

      $excepted_col = 'category_id';
      foreach(config('translatable.locales') as $locale)
      {
        $rules[$locale . '.name'] = ['required','min:3','unique:category_translations,name'.($id ? ",$id,$excepted_col" : "")];
      }

      return $rules;
    }
}
