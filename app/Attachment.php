<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    protected $guarded = [];

    protected $appends = [
        'url',
    ];

    /**
     * Relationships
     */
    public function attachable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Accessors, Mutators, etc
     */
    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }
}
