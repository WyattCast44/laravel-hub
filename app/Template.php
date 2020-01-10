<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    /**
     * The templates author
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the templates's favorites.
     */
    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    /**
     * Increment the view count
     */
    public function incrementViewCount()
    {
        $this->increment('views');

        return;
    }

    public function incrementDownloadCount()
    {
        $this->increment('downloads');

        return;
    }
}
