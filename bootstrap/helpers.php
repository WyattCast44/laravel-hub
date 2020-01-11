<?php

use Illuminate\Support\Facades\Session;

function flash($key, $type, $message)
{
    Session::flash($key, array_merge((array)session($key), [
        'type' => (string) $type,
        'message' => (string) $message
    ]));

    return;
}
