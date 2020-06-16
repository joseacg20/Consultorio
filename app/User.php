<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'specialty', 'professionalCertificate', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role','role_user');
    }

    public function patients(){
        return $this->hasMany('App\Patient');
    }

    public function hasRole($role){
        return $this->roles == $role;
    }

    public function has_roles($id){
        foreach($this->roles as $role){
            if($role->id == $id){
                return true;
            }
        }
        return false;
    }

}
