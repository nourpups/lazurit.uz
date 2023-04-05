<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

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
      $id = $this->product->id ?? false;

      $rules = [
          'category_id' => 'required',
          'image' => ($id ? "" : "required").'|image|max:1024',
          'price' => 'required|numeric',
      ];

      $excepted_col = 'product_id';
      foreach(config('translatable.locales') as $locale) {
        $rules[$locale . '.name'] = 'required|min:3|unique:product_translations,name'.($id ? ",$id,$excepted_col" : "");
        $rules[$locale . '.description'] = 'required';
      }

      return $rules;
    }
//     protected function failedValidation(Validator $validator)
//  {
//     if($this->wantsJson())
//     {
//         $response = response()->json([
//             'status' => 400,
//             'errors' => $validator->errors()//$validator->errors()
//         ]);
//     }else{
//         $response = redirect()
//             ->route('guest.login')
//             ->with('message', 'Ops! Some errors occurred')
//             ->withErrors($validator);
//     }

//     throw (new ValidationException($validator, $response))
//         ->errorBag($this->errorBag)
//         ->redirectTo($this->getRedirectUrl());
// }
}
