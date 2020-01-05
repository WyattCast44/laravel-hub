<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'auth_token'
    ];

    /**
     * Get the field used for route model
    * binding
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
