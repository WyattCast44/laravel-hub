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
