@if (session('status'))

    <div x-data="{ show: true }">

        <div x-show="show">
            @if (session('status')['type'] == "success")
                <div class="bg-green-200 py-2 text-sm text-green-600">
                    <div class="container mx-auto flex items-center justify-between">
                        <p>
                            {{ (string) session('status')['message'] }}
                        </p>
                        <button x-on:click="show = false" class="text-lg leading-none">
                            &times;
                        </button>                    
                    </div>
                </div>
            @else
                <div class="bg-red-200 py-2 text-red-700 text-sm">
                    <div class="container mx-auto flex items-center justify-between">
                        <p>
                            {{ (string) session('status')['message'] }}
                        </p>
                        <button x-on:click="show = false" class="text-lg leading-none">
                            &times;
                        </button>                    
                    </div>
                </div>
            @endif
        </div>

    </div>

@endif
    


