<?php

namespace App\Domain\Templates\Models;

use App\User;
use App\Favorite;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    public function favorites()
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function route($method = 'show')
    {
        return route("app.templates.{$method}", [
            'template' => $this,
        ]);
    }
}
