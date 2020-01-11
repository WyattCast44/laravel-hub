<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    protected $casts = [
        'meta' => 'array'
    ];

    /**
     * Get the field used for route
     * model binding
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Get the package owner
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the package's favorites.
     */
    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    /**
     * Build up the route requested
     */
    public function route($method = 'show')
    {
        return route("app.packages.{$method}", [
            'vendor' => $this->vendor,
            'package' => $this,
        ]);
    }

    public function github()
    {
        // I want this to query github and get data from that
        // and cache the response for some set time.
        // The main reason is I dont want to store the readme
        // for more than the cache time.
        return;
    }
}
