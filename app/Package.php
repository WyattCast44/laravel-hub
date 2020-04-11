<?php

namespace App;

use App\Actions\ResyncPackage;
use App\Traits\HasAttachments;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasAttachments;

    protected $guarded = [];

    protected $casts = [
        'meta' => 'array',
    ];

    protected $dates = [
        'last_synced_at',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Relationships
     */
    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function createFromUrl(string $url)
    {
        // $repo = Repo::fromUrl($url);

        // // $package = self::create([
        // //     'user_id' => $repo->owner->id,
        // //     'submitter_id' => (auth()->check()) ? auth()->id() : null,
        // //     'name' => $repo['name'],
        // //     'vendor' => $owner_username,
        // //     'display_name' => $repo['name'],
        // //     'description' => $repo['description'],
        // //     'repo_url' => $repo['html_url'],
        // //     'official' => ($owner_username == "laravel") ? true : false,
        // //     'parsed_readme' => null,
        // //     'language' => $repo['language'],
        // //     'stars_count' => $repo['stargazers_count'],
        // //     'last_synced_at' => now(),
        // //     'meta' => json_encode($repo),
        // // ]);

        // $package = $action->execute($parts[0], $parts[1]);
    }

    /**
     * Misc
     */
    public function route($method = 'show')
    {
        return route("app.packages.{$method}", [
            'vendor' => $this->vendor,
            'package' => $this,
        ]);
    }
}
