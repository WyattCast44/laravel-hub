@extends('users.layout')

@section('page')

<ul>

    @foreach ($favorites as $favorite)

        <li class="border-b border-solid py-4">
            
            {{ $favorite->favoritable->name }}
        
        </li>
                
    @endforeach

</ul>

<div>
    {{ $favorites->links() }}
</div>

@endsection
