@extends('packages.show.layout')

@section('package-page')

    <div class="px-2">
        <div class="flex flex-wrap -mx-2">
    
            @forelse ($package->attachments as $screenshot)

                <div class="w-1/4 px-2 my-2">
                    <img src="{{ Storage::url($screenshot->path) }}" alt="A screenshot of {{ $package->name }}" class="w-full h-auto rounded shadow-inner">
                </div>
                
            @empty
                
                <div class="flex items-center justify-center w-full h-32 px-2 my-2 font-semibold text-gray-400 break-words border-4 border-dashed rounded">
                    <h4 class="text-2xl">No screenshots have been uploaded</h4>
                </div>
            
            @endforelse
                
        </div>
    </div>

@endsection