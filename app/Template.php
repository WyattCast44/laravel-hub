<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

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
     * Misc
     */
    public function favorite(User $user = null)
    {
        if ($user === null) {
            $user = auth()->user();
        }

        return $user->favorites();
    }

    public function incrementViewCount()
    {
        $this->increment('views');

        return $this;
    }

    public function incrementDownloadCount()
    {
        $this->increment('downloads');

        return $this;
    }
}
