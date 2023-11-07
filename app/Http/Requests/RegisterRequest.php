<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends
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
        $regex = 'regex:/^[+](998)(90|91|93|94|95|97|98|99|88|33)[0-9]{7}$/';
        $rules = [
           'name' => [
              'bail',
              'required',
              'min:3',
              'max:30',
              'unique:users,name',
              'regex:/^[\pL\s]+$/u'
           ],
           'phone' => [
              'required',
              $regex,
              'unique:users,phone'
           ],
           'password' => [
              'required',
              'min:6',
              'max:20'
           ]
        ];
        $phone = str_replace(" ", "", request('phone'));
        $this->offsetSet('phone', $phone);

        return $rules;
    }

}
