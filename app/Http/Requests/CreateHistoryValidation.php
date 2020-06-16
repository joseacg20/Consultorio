<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHistoryValidation extends FormRequest
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
            'age' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            
            'paternalGrandparents' => ['required', 'string', 'max:255'],
            'maternalGrandparents' => ['required', 'string', 'max:255'],
            'uncles' => ['required', 'string', 'max:255'],
            'dad' => ['required', 'string', 'max:255'],
            'mom' => ['required', 'string', 'max:255'],
            'brothers' => ['required', 'string', 'max:255'],
            
            'birthdate' => ['required', 'string', 'max:255'],
            'placeOfBirth' => ['required', 'string', 'max:255'],
            'currentResidence' => ['required', 'string', 'max:255'],
            'scholarship' => ['required', 'string', 'max:255'],
            'maritalStatus' => ['required', 'string', 'max:255'],
            'hygienicHabits' => ['required', 'string', 'max:255'],
            'dietaryHabits' => ['required', 'string', 'max:255'],
            'drugAddiction' => ['required', 'string', 'max:255'],
            
            'childhoodIllnesses' => ['required', 'string', 'max:255'],
            'surgeries' => ['required', 'string', 'max:255'],
            'allergies' => ['required', 'string', 'max:255'],
            'currentMedication' => ['required', 'string', 'max:255'],
            
            'weight' => ['required', 'string', 'max:255'],
            'size' => ['required', 'string', 'max:255'],
            'head' => ['required', 'string', 'max:255'],
            'eyes' => ['required', 'string', 'max:255'],
            'ears' => ['required', 'string', 'max:255'],
            'nose' => ['required', 'string', 'max:255'],
            'mouth' => ['required', 'string', 'max:255'],
            'neck' => ['required', 'string', 'max:255'],
            'chest' => ['required', 'string', 'max:255'],
            
            'shape' => ['required', 'string', 'max:255'],
            'respiratoryMovements' => ['required', 'string', 'max:255'],
            'fr' => ['required', 'string', 'max:255'],
            'abnormalNoises' => ['required', 'string', 'max:255'],
            'fc' => ['required', 'string', 'max:255'],
            'abdomen' => ['required', 'string', 'max:255'],
            'superiorLimbs' => ['required', 'string', 'max:255'],
            'lowerExtremities' => ['required', 'string', 'max:255'],
        ];
    }

    public function message(){
        return [
            'age.required' => 'Campo necesario',
            'address.required' => 'Campo necesaria',

            'paternalGrandparents.required' => 'Campo necesario',
            'maternalGrandparents.required' => 'Campo necesaria',
            'uncles.required' => 'Campo necesario',
            'dad.required' => 'Campo necesario',
            'mom.required' => 'Campo necesaria',
            'brothers.required' => 'Campo necesario',
            
            'birthdate.required' => 'Campo necesaria',
            'placeOfBirth.required' => 'Campo necesario',
            'currentResidence.required' => 'Campo necesario',
            'scholarship.required' => 'Campo necesaria',
            'maritalStatus.required' => 'Campo necesario',
            'hygienicHabits.required' => 'Campo necesaria',
            'dietaryHabits.required' => 'Campo necesario',
            'drugAddiction.required' => 'Campo necesario',

            'childhoodIllnesses.required' => 'Campo necesaria',
            'surgeries.required' => 'Campo necesario',
            'allergies.required' => 'Campo necesaria',
            'currentMedication.required' => 'Campo necesario',
            
            'weight.required' => 'Campo necesario',
            'size.required' => 'Campo necesaria',
            'head.required' => 'Campo necesario',
            'eyes.required' => 'Campo necesaria',
            'ears.required' => 'Campo necesaria',
            'nose.required' => 'Campo necesario',
            'mouth.required' => 'Campo necesario',
            'neck.required' => 'Campo necesaria',
            'chest.required' => 'Campo necesario',

            'shape.required' => 'Campo necesaria',
            'respiratoryMovements.required' => 'Campo necesario',
            'fr.required' => 'Campo necesario',
            'abnormalNoises.required' => 'Campo necesaria',
            'fc.required' => 'Campo necesario',
            'abdomen.required' => 'Campo necesaria',
            'superiorLimbs.required' => 'Campo necesario',
            'lowerExtremities.required' => 'Campo necesario',
        ];
    }
}
