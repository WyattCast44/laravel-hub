@extends('packages.show.layout')

@section('package-page')

    <div class="px-2">
        <div class="flex flex-wrap -mx-2">
    
            @forelse ($package->attachments as $screenshot)

                <div class="w-1/4 px-2 my-2">
                    <img src="{{ Storage::url($screenshot->path) }}" alt="A screenshot of {{ $package->name }}" class="w-full h-auto rounded shadow-inner">
                </div>
                
            @empty
                
                @if(auth()->check() && auth()->user()->id == $package->user->id)
                    <div class="flex items-center justify-center w-full h-32 px-2 my-2 font-semibold text-gray-400 break-words border-4 border-dashed rounded">
                        <h4 class="text-xl text-center md:text-2xl">Click <a href="#">here</a> to upload screenshots</h4>

                        <form action="{{ route('app.attachments.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="form-input" multiple accept=".jpg, .jpeg, .png">
                            <button type="submit">Submit</button>
                        </form>
                        
                    </div>
                @else
                    <div class="flex items-center justify-center w-full h-32 px-2 my-2 font-semibold text-gray-400 break-words border-4 border-dashed rounded">
                        <h4 class="text-xl text-center md:text-2xl">No screenshots have been uploaded</h4>
                    </div>
                @endif
            
            @endforelse            
                
        </div>
    </div>

@endsection