<header>
    <div class="h-1 bg-red-500 w-full"></div>

    <nav class="bg-white py-6 shadow">
    
        <div class="container mx-auto flex items-center justify-between">
            
            <div class="flex items-center">
                
                <a href="/" class="text-red-500 font-bold text-2xl font-header leading-tight hover:no-underline tracking-tighter">
                    📦 Laravel Hub
                </a>

                <div class="ml-5">

                    <a href="{{ route('app.packages.index') }}" class="text-lg hover:no-underline hover:text-red-700">
                        Packages
                    </a>
                    <a href="{{ route('app.templates.index') }}" class="text-lg hover:no-underline hover:text-red-700 mx-2">
                        Templates
                    </a>
                    
                </div>

            </div>

            <div class="flex items-center">

                @auth

                    <div class="flex items-center relative" x-data="{ open: false }">

                        <button class="text-red-500 flex items-center" x-on:click="open = true">
                            <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-lg w-8 h-8 shadow">
                            <span class="text-xl">&triangledown;</span>
                        </button>     

                        <div x-show="open" x-on:click.away="open = false" class="absolute shadow-lg border border-solid right-0 rounded-lg bg-white w-48 flex flex-col pb-2" style="top:38px">

                            <a href="{{ route('app.users.show', auth()->user()) }}" class="tracking-tighter text-gray-900 hover:no-underline px-4 py-3 border-b border-solid break-words">
                                <span class="text-sm text-gray-500 block">Signed in as</span>
                                {{ auth()->user()->name }}
                            </a>

                            <a href="#" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">My Packages</a>
                            <a href="#" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">My Templates</a>
                            <a href="{{ route('app.settings.index') }}" class="px-4 py-1 hover:bg-gray-200 hover:no-underline">
                                Settings
                            </a>
                            
                            <form action="{{ route('auth.logout') }}" method="post" class="block">
                                @csrf
                                <button type="submit" class="px-4 py-1 hover:bg-gray-200 text-left text-red-500 w-full">Logout</button>
                            </form>
                            
                        </div>

                    </div>
                    
                @else    
                    
                    <a href="{{ route('auth.login') }}" class="leading-tight text-lg hover:no-underline hover:text-red-700">
                        Login/Register
                    </a>

                @endauth
            </div>

        </div>
    
    </nav>
</header>