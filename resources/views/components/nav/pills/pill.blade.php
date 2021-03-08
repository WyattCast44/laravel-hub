@php
    $base = 'px-3 py-2 text-sm font-medium leading-5 rounded-md focus:outline-none hover:no-underline focus:ring-1 ring-red-300 ring-offset-1';
    $activeClasses = 'bg-red-200 text-red-800 hover:shadow-inner hover:bg-opacity-90';
    $inactive = 'text-gray-700 focus:bg-red-200 hover:bg-red-200 hover:bg-bg-opacity-50 focus:bg-opacity-50';
@endphp

<a href="{{ $route }}" class="{{ $base }} {{ active($active, $activeClasses, $inactive) }}">
    {{ $slot }}
</a>