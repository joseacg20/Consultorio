<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePatientValidation extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'home' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ];
    }

    public function message(){
        return [
            'name.required' => 'Campo necesario',
            'lastName.required' => 'Campo necesaria',
            'email.required' => 'Campo necesario',
            'home.required' => 'Campo necesaria',
            'phone.required' => 'Campo necesario',
        ];
    }
}
