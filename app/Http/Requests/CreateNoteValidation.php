<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteValidation extends FormRequest
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
            'affair' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
        ];
    }

    public function message(){
        return [
            'affair.required' => 'Campo necesario',
            'content.required' => 'Campo necesaria',
        ];
    }
}
