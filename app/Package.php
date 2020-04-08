<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    protected $casts = [
        'meta' => 'array'
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
     * GitHub Actions
     */
    public function resyncReadme()
    {
        //
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
