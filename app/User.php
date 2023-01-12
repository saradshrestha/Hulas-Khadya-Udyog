<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User  extends Authenticatable
{
    use  Notifiable;

    protected $fillable = [
        'name', 'email','password','phone','address','status','image','role','last_login'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function scopeActive($query){
        return $query->where('status','Active');
    }

}
