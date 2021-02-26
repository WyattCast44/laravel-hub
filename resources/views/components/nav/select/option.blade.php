<option 
    value="{{ $route }}" 
    @if (request()->routeIs($active)) {{ 'selected' }} @endif
>
    {{ $slot }}
</option>