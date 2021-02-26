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

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    public function attachable()
    {
        return $this->morphTo();
    }

    /**
     * @return \App\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
