@extends('users.layout-new')

@section('user-page')

<ul>
    
    @forelse ($favorites as $favorite)

        <li class="py-4 border-b border-solid">
            
            {{ $favorite->favoritable->name }}
        
        </li>

    @empty

        @include('users.favorites.partials.no-favorites')
                
    @endforelse

</ul>

<div>
    {{ $favorites->links() }}
</div>

@endsection
