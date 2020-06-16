<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Evolution extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'syptoms', 'pressure', 'temp', 'rc', 'diagnosis', 'treatment', 'user_id', 'patient_id'
    ];
}
