<?php

namespace App;

use Laravel\Scout\Searchable;
use App\Traits\HasAttachments;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasAttachments, Searchable;

    protected $guarded = [];

    protected $casts = [
        'meta' => 'array',
    ];

    protected $dates = [
        'readme_last_parsed_at',
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

    /**
     * Scout
     */
    public function shouldBeSearchable()
    {
        return env('SYNC_WITH_SEARCH', false);
    }

    public function searchableAs()
    {
        $env = app()->environment();

        if ($env == "production") {
            return 'packages_index';
        }

        return 'packages_index_testing';
    }

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'name' => $this->name,
            'vendor' => $this->vendor,
            'description' => $this->description,
            'parsed_readme' => substr($this->parsed_readme, 0, 500),
            'language' => $this->language,
        ];

        return $array;
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
