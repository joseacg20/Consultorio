<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'email', 'home', 'phone', 'share', 'user_id'
    ];

    public function stories()
    {
        return $this->hasMany('App\History');
    }

    public function evolutions()
    {
        return $this->hasMany('App\Evolution');
    }
}
