<a 
    href="{{ $route }}" 
    class="px-3 py-2 text-sm font-medium leading-5 text-gray-500 rounded-md hover:text-gray-700 focus:outline-none focus:text-gray-600 focus:bg-gray-100 hover:no-underline hover:bg-red-100 mr-3 
    @if (request()->routeIs($active)) {{ 'bg-red-200 text-red-800' }} @endif"
    >
    {{ $slot }}
  </a>