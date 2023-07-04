<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends
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

        $loginType = 'name';
        $isNotName = !preg_match('/^[\pL\s]+$/u', request('name'));

        if ($isNotName) {
            $loginType = 'phone';
            $phone = str_replace(" ", "", request('name'));
            $this->merge(['phone' => $phone]);
        }

        //regex for phone
        $regex = 'regex:/^[+](998)(90|91|93|94|95|97|98|99|88|33)[0-9]{7}$/';

        $rules = [
           $loginType => 'bail|required|min:3|max:30|regex:/^[\pL\s]+$/u',
           'password' => 'required|min:6|max:20',
           'confirm_order' => 'nullable'
        ];

        if ($loginType == 'phone') {
            $rules['phone'] = [
               'required',
               $regex
            ];
        }

        return $rules;
    }
}
