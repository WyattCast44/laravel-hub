<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    /**
     * Get the users packages
     */
    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    /**
     * Get the users templates
     */
    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
