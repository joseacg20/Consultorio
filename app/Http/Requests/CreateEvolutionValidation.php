<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEvolutionValidation extends FormRequest
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
            'type' => ['required', 'string', 'max:255'],
            'syptoms' => ['required', 'string', 'max:255'],
            'pressure' => ['required', 'string', 'max:255'],
            'temp' => ['required', 'string', 'max:255'],
            'rc' => ['required', 'string', 'max:255'],
            'diagnosis' => ['required', 'string', 'max:255'],
            'treatment' => ['required', 'string', 'max:255'],
        ];
    }

    public function message(){
        return [
            'type.required' => 'Campo necesario',
            'syptoms.required' => 'Campo necesaria',
            'pressure.required' => 'Campo necesaria',
            'temp.required' => 'Campo necesario',
            'rc.required' => 'Campo necesaria',
            'diagnosis.required' => 'Campo necesaria',
            'treatment.required' => 'Campo necesario',
        ];
    }
}
