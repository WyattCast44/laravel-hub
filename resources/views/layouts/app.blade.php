<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="turbolinks-cache-control" content="no-cache">
    <link rel="manifest" href="/site.webmanifest">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <livewire:styles />
    <livewire:scripts />
    <script src="{{ mix('js/livewire-turbolinks.js') }}" data-turbo-eval="false" data-turbo-track="reload" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" data-turbo-track="reload">
    <script src="{{ mix('js/app.js') }}" data-turbo-track="reload" defer></script>
    
    @stack('head')
</head>
<body class="font-sans text-base antialiased text-gray-800 bg-gray-200">

    @include('layouts.partials.navbar')

    @yield('content')

    @stack('footer')
</body>
</html>
