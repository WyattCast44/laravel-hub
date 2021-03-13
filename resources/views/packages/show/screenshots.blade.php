@extends('packages.show.layout')

@section('package-page')

    <ul class="flex justify-center px-2 -mx-2 md:justify-start">
    
        @forelse ($package->attachments as $screenshot)

            <li class="flex justify-center w-auto h-32 px-2 my-2 md:items-start md:h-40 md:w-1/4">
                
                <img 
                    class="w-auto h-full rounded"
                    alt="A screenshot of {{ $package->name }}" 
                    src="{{ Storage::url($screenshot->path) }}">

            </li>
                    
        @empty
        
            <li class="flex flex-col items-center justify-center w-full text-center text-gray-500 border-4 border-gray-400 border-dashed rounded p-7">
                <h3 class="text-xl font-semibold text-center md:text-2xl">
                    No screenshots have been uploaded
                </h3>
            </li>
            
        @endforelse
                
    </ul>

@endsection