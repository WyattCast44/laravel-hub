<?php

namespace App;

use App\Services\GitHub;
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

    /**
     * Get the user's favorites.
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function getAvatarAttribute($value)
    {
        return ($value === null) ? $this->getGravatarUrl() :  $value;
    }

    protected function getGravatarUrl()
    {
        $hash = md5(trim(strtolower($this->email)));

        return "https://www.gravatar.com/avatar/{$hash}?s=200";
    }

    public function getRepos()
    {
        $key = "{$this->username}:repos";
        
        if (Cache::has($key)) {
            $repos = Cache::get($key);
        } else {
            $client = app()->make(GitHub::class);

            $data = $client->getUserRepos($this->username);

            Cache::put($key, $data, now()->addMinutes(5));

            $repos = $data;
        }

        return collect($repos);
    }
}
