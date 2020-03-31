<form action="{{ $action }}" method="post">

    @csrf

    @method($method ?? 'post')

    {{ $slot }}
    
</form>