@extends('packages.show.layout')

@section('package-page')

    <div class="px-2">
        <div class="flex flex-wrap -mx-2">
    
            @forelse ($package->attachments as $screenshot)

                <div class="flex items-start justify-center w-1/4 h-40 px-2 my-2">
                    <img src="{{ Storage::url($screenshot->path) }}" alt="A screenshot of {{ $package->name }}" class="w-auto h-full rounded">
                </div>
                
            @empty
                
                @if(auth()->check() && auth()->user()->id == $package->user->id)
                    <div class="flex items-center justify-center w-full h-32 px-2 my-2 font-semibold text-gray-400 break-words border-4 border-dashed rounded" x-data="{}">
                        
                        <h4 class="text-xl text-center md:text-2xl">
                            Click <button id="add-attachment-btn" class="font-semibold text-red-500 hover:underline">here</button> to upload screenshots
                        </h4>

                        <form action="{{ $package->route('screenshots.store') }}" method="POST" enctype="multipart/form-data" class="hidden" id="attachment-form">
                            @csrf
                            <input type="hidden" name="model_id" value="{{ $package->id }}">
                            <input type="hidden" name="model_type" value="{{ get_class($package) }}">
                            <input type="file" class="hidden" multiple accept=".jpg, .jpeg, .png" name="files[]" id="attachment-input">
                            <button type="submit" value="submit">Submit</button>
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

    @push('footer')

        <script>

            function init() {
                
                // Grab the button
                document.getElementById('add-attachment-btn').addEventListener('click', openDialog);
                
                // Open the file dialog
                function openDialog() {
                    document.getElementById('attachment-input').click();
                }
                
                // Grab the input el
                document.getElementById('attachment-input').addEventListener('change', submitForm);
                
                // Submit form
                function submitForm() {
                    document.getElementById('attachment-form').submit();
                }
            }

            document.addEventListener("turbolinks:load", function() {
                init();
            });

            

        </script>
        
    @endpush

@endsection