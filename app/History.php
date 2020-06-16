<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class History extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'age',
        'address',
        'paternalGrandparents', 
        'maternalGrandparents', 
        'uncles', 
        'dad', 
        'mom', 
        'brothers',
        'birthdate', 
        'placeOfBirth', 
        'currentResidence', 
        'scholarship', 
        'maritalStatus', 
        'hygienicHabits',
        'dietaryHabits', 
        'drugAddiction', 
        'childhoodIllnesses', 
        'surgeries', 
        'allergies', 
        'currentMedication',
        'menarca', 
        'menstrualRhythm', 
        'fum', 
        'gestas', 
        'paras', 
        'abortions',
        'caesareanSections', 
        'fup', 
        'vsa', 
        'contraceptiveUses', 
        'weight', 
        'size',
        'head', 
        'eyes', 
        'ears',
        'nose', 
        'mouth', 
        'neck',
        'chest',
        'shape',
        'respiratoryMovements', 
        'fr',
        'abnormalNoises',
        'fc', 
        'abdomen', 
        'superiorLimbs', 
        'lowerExtremities',
        'user_id',
        'patient_id'
    ];
}
