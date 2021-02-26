@extends('users.layout')

@section('user-page')

<section>

    <ul>
        
        @forelse ($favorites as $favorite)
    
            <li class="py-4 border-b border-solid">        
                {{ $favorite->favoritable->name }}
            </li>
    
        @empty
    
            <li class="flex flex-col items-center justify-center text-center border-4 border-gray-300 border-dashed rounded p-7">
                <h3 class="text-xl font-semibold text-gray-500">
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
