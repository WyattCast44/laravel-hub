@if (session('status'))

    @if (session('status')['type'] == "success")
        <div class="bg-green-200 py-2">
            <div class="container mx-auto text-sm text-green-600">
                {{ (string) session('status')['message'] }}
            </div>
        </div>
    @else
        <div class="bg-red-200 py-2">
            <div class="container mx-auto text-sm text-red-700">
                {{ (string) session('status')['message'] }}
            </div>
        </div>
    @endif

@endif
    


