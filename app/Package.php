<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    /**
     * Get the field used for route
     * model binding
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Get the package submitter
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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
}
