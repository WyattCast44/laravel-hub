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
                            <svg class="w-5 h-5"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>                    
                    </div>
                </div>
            @else
                <div class="px-2 py-2 text-sm text-red-700 bg-red-200">
                    <div class="container flex items-center justify-between mx-auto">
                        <p>
                            {{ (string) session('status')['message'] }}
                        </p>
                        <button x-on:click="show = false" class="text-lg leading-none">
                            <svg class="w-5 h-5"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>                    
                    </div>
                </div>
            @endif
        </div>

    </div>

@endif
    


