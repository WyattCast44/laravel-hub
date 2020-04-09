<?php

namespace App\Traits;

use App\Attachment;

trait HasAttachments
{
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}
