<?php

namespace Tweet\Admin\Users\Entities;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserEntity extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    
    protected $fillable = [
        'name', 'email', 'password','api_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
