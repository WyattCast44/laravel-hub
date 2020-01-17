<?php

namespace App;

use App\Services\GitHub\Client;
use Illuminate\Support\Facades\Cache;
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

    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * Relationships
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function templates()
    {
        return $this->hasMany(Template::class);
    }


    /**
     * Accessors, mutators
     */
    public function getAvatarAttribute($value)
    {
        return ($value === null) ? $this->getGravatarUrl() :  $value;
    }

    protected function getGravatarUrl()
    {
        $hash = md5(trim(strtolower($this->email)));

        return "https://www.gravatar.com/avatar/{$hash}?s=200";
    }

    /**
     * Misc
     */
    public function getRepos()
    {
        $client = new Client($this->auth_token);

        return collect($client->getUserRepos($this->username));
    }
}
