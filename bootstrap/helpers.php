<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

function flash($key, $type, $message)
{
    Session::flash($key, array_merge((array)session($key), [
        'type' => (string) $type,
        'message' => (string) $message
    ]));

    return;
}

/**
 * Source: https://github.com/tightenco/novapackages/blob/master/app/helpers.php
 */
if (! function_exists('translate_github_emoji($key')) {
    function translate_github_emoji($key)
    {
        return Arr::get([
            '+1' => '👍',
            '-1' => '👎',
            'laugh' => '😁',
            'hooray' => '🎉',
            'confused' => '😕',
            'heart' => '❤️',
        ], $key, '⁉️');
    }
}
