<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="turbolinks-cache-control" content="no-cache">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js" integrity="sha256-C7DTYRJLG+B/VEzHGeoPMw699nsTQYPAXHKXZb+q04E=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/mode-yaml.js" integrity="sha256-WgdHONNZD/4LA7nlYhFqXqAAvZL4U2vbXDo2g6rWv7s=" crossorigin="anonymous" defer></script>
</head>
<body class="antialiased font-sans text-base text-gray-800 bg-gray-100">

    @include('layouts.partials.navbar')

    @yield('content')
    
    @livewireAssets
</body>
</html>
