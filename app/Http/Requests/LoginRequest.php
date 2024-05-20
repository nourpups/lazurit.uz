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

        $nameRegex = '/^[\pL\s]+$/'; // string and space only
        $isNotName = !preg_match($nameRegex, request('name'));

        if ($isNotName) {
            $loginType = 'phone';
            $phone = str_replace(' ', '', request('name'));
            $this->merge(['phone' => $phone]);
        }

        $rules = [
           $loginType => 'bail|required|min:3|max:30|regex:'.$nameRegex,
           'password' => 'required|min:6|max:20',
           'confirm_order' => 'nullable'
        ];

       $phoneRegex = '/^[+](?:998)?(?:90|91|93|94|95|97|98|99|88|33)[0-9]{7}$/u';
       // format like: +998[mobile operator code][phone number], e.g: +998971234567
        if ($loginType == 'phone') {
            $rules['phone'] = ['required', 'regex:'.$phoneRegex];
        }

        return $rules;
    }
}
