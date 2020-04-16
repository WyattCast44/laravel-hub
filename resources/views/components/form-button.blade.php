<form action="{{ $action }}" method="post" {{ $attributes }}>

    @csrf

    @method($method ?? 'post')

    {{ $slot }}
    
</form>