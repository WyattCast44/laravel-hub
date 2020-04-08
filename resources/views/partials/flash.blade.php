@if (session('status'))

    <div x-data="{ show: true }">

        <div x-show="show">
            @if (session('status')['type'] == "success")
                <div class="px-2 py-2 text-sm text-green-600 bg-green-200">
                    <div class="container flex items-center justify-between mx-auto">
                        <p>
                            {{ (string) session('status')['message'] }}
                        </p>
                        <button x-on:click="show = false" class="text-lg leading-none">
                            &times;
                        </button>                    
                    </div>
                </div>
            @else
                <div class="py-2 text-sm text-red-700 bg-red-200">
                    <div class="container flex items-center justify-between mx-auto">
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
    


