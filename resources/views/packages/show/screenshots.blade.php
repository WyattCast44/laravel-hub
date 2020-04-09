@extends('packages.show.layout')

@section('package-page')

    <div class="px-2">
        <div class="flex flex-wrap -mx-2">
    
            @forelse ($package->attachments as $screenshot)

                <div class="w-1/4 px-2 my-2">
                    <img src="{{ Storage::url($screenshot->path) }}" alt="A screenshot of {{ $package->name }}" class="w-full h-auto">
                </div>
            
            @empty
            
                None
            
            @endforelse
                
        </div>
    </div>

@endsection