<?php

namespace App\Observers;

use App\Domain\Templates\Models\Template;

class TemplateObserver
{
    /**
     * Handle the template "created" event.
     *
     * @param  \App\Domain\Templates\Models\Template  $template
     * @return void
     */
    public function created(Template $template)
    {
        //
    }

    /**
     * Handle the template "updated" event.
     *
     * @param  \App\Domain\Templates\Models\Template  $template
     * @return void
     */
    public function updated(Template $template)
    {
        //
    }

    /**
     * Handle the template "deleted" event.
     *
     * @param  \App\Domain\Templates\Models\Template  $template
     * @return void
     */
    public function deleted(Template $template)
    {
        $template->favorites->each->delete();
    }

    /**
     * Handle the template "restored" event.
     *
     * @param  \App\Domain\Templates\Models\Template  $template
     * @return void
     */
    public function restored(Template $template)
    {
        //
    }

    /**
     * Handle the template "force deleted" event.
     *
     * @param  \App\Domain\Templates\Models\Template  $template
     * @return void
     */
    public function forceDeleted(Template $template)
    {
        //
    }
}
