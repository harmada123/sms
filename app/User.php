<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'middlename',
        'lastname',
        'email',
        'role_id',
        'photo_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function role(){
        return $this->belongsTo('App\Roles','role_id');
    }
    public function student(){
        return $this->belongsTo('App\Students');
    }
    public function course(){
        return $this->belongsTo('App\Courses');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin(){
        if($this->role != null && $this->role->role == 'admin'){
            return true;
        }else{
            return false;
        }
    }

}
