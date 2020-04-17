<?php

namespace App\Queries;

use Illuminate\Support\Facades\DB;

class PackageLanguages
{
    public static function get()
    {
        return collect(array_column(DB::select('select distinct language from packages'), 'language'));
    }
}
