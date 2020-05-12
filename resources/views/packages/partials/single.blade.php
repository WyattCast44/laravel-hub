<div class="border-b border-gray-200">
    
    <div class="block">
        
        <div class="px-4 py-6 sm:px-6">
            
            <!-- Top row -->
            <div class="flex items-center justify-between">
                <div class="text-sm text-xl font-medium tracking-tight truncate">
                    <a href="{{ route('app.users.show', $package->user) }}">{{ $package->user->username }}</a>
                    <span class="text-gray-500">/</span>
                    <a href="{{ $package->route('show') }}">{{ $package->name }}</a>
                </div>
                <div class="flex flex-shrink-0 ml-2">

                    @if($package->official)
                        <span
                        class="inline-flex px-2 mr-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Official Package
                        </span>
                    @endif
                    
                    <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                        {{ $package->language }}
                    </span>
                    
                </div>
            </div>
            
            <!-- Second Row -->
            <div class="flex-col mt-2 sm:flex-row sm:justify-between">
                
                <!-- Second Row Left -->
                @if($package->description)
                    <div class="sm:flex">
                        <div class="flex items-center mr-6 text-sm leading-5 text-gray-500">
                            {{ $package->description }}
                        </div>
                    </div>
                @endif

                <div class="flex">
                    <livewire:packages.star :package="$package" :key="(rand() * $package->id)">
                    <livewire:packages.favorite :package="$package" :key="(rand() * $package->id)">
                    
                </div>
                
            </div>
            
        </div>

    </div>
    
</div>

@component('components.code-component', ['viewName' => 'show-users.blade.php'])
@slot('view')
@verbatim
<div>
    @foreach ($users as $user)
        <livewire:user-profile :user="$user" :key="$user->id">
            @endforeach
        </div>
        @endverbatim
        @endslot
        @endcomponent
        
        
```php
// user-profile component
<div>
    // Some markup
    <livewire:user-profile-additional-component :user="$user" :key="(rand() * $user->id)">
    <livewire:user-profile-some-related-component :user="$user" :key="(rand() * $user->id)">
</div>
```