@extends('users.layout')

@section('user-page')

<section>

    <ul>
        
        @forelse ($favorites as $favorite)
    
            <li class="py-4 border-b border-solid">        
                <a href="{{ $favorite->favoritable->route('show') }}">
                    {{ $favorite->favoritable->name }}
                </a>
            </li>
    
        @empty
    
            <li class="flex flex-col items-center justify-center text-center text-gray-500 border-4 border-gray-400 border-dashed rounded p-7">
                <h3 class="text-xl font-semibold text-center md:text-2xl">
                    {{ $user->name }} hasn't favorited anything yet
                </h3>
            </li>
                    
        @endforelse
    
    </ul>
    
    <div>
        {{ $favorites->links() }}
    </div>
    
</section>

@endsection
