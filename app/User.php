<?php

namespace App;

use App\Services\Github\Github;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasRoles;

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
    public function favorite($model)
    {
        return $this->favorites()->create([
            'favoritable_id' => $model->id,
            'favoritable_type' => get_class($model),
        ]);
    }

    public function unfavorite($model)
    {
        return $this->favorites()->where([
            ['favoritable_id', $model->id],
            ['favoritable_type', get_class($model)],
        ])->delete();
    }

    public function hasFavorited($model)
    {
        return $this->favorites()->where([
            ['favoritable_id', $model->id],
            ['favoritable_type', get_class($model)],
        ])->get()->count() > 0;
    }

    public function syncWithGitHub()
    {
        try {
            $client = resolve(GitHub::class);

            $github = $client->user($this->username);

            $this->update([
                'name' => $github['name'],
                'bio' => $github['bio'],
                'blog' => $github['blog'],
            ]);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
