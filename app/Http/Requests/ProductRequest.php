<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends
   FormRequest
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
      $id = $this->product->id ?? false;
      $this->offsetSet('price', str_replace(' ', '', request('price')));

      $rules = [
         'category_id' => 'required',
         'image' => ($id ? "" : "required") . '|image|max:1024',
         'price' => 'required|numeric',
      ];

      foreach (config('translatable.locales') as $locale) {
         $rules[$locale . '.name'] = 'required|min:3';
      }

      return $rules;
   }
}
