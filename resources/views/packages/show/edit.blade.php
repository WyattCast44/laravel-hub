@extends('packages.show.layout')

@section('package-page')

    <div class="p-6 md:p-10">
        
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Repo Details</h3>
                        <p class="inline mt-1 text-sm leading-5 text-gray-600">
                            This information is synced with GitHub and is refreshed every 15 minutes. You
                            can trigger a refresh once every 5 minutes by clicking <x-form-button class="inline p-0 m-0 text-sm text-red-500" method="post" :action="$package->route('resync')">
                                <button type="submit" class="cursor-pointer text-red hover:underline">here.</button>
                            </x-form-button>
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">

                    <form action="#" method="POST">
                        <div class="sm:overflow-hidden">
                            <div class="px-4 py-6 sm:py-0 sm:px-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="vendor"
                                               class="block text-sm font-medium leading-5 text-gray-700">Package Vendor</label>
                                        <input type="text" id="vendor" class="w-full mt-2" value="{{ $package->vendor }}" readonly/>
                                    </div>
                                </div>
        
                                <div class="mt-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="name"
                                               class="block text-sm font-medium leading-5 text-gray-700">Package Name</label>
                                        <input type="text" id="name" class="w-full mt-2" value="{{ $package->name }}" readonly />
                                    </div>
                                </div>
        
                                <div class="mt-6">
                                    <label for="description"
                                        class="block text-sm font-medium leading-5 text-gray-700">
                                        Description
                                    </label>
                                    <textarea id="description" rows="3" class="w-full mt-2" readonly>{{ $package->description }}</textarea>
                                </div>

                                <div class="mt-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="repo_url"
                                               class="block text-sm font-medium leading-5 text-gray-700">Repo URL</label>
                                        <input type="url" id="repo_url" class="w-full mt-2" value="{{ $package->repo_url }}" readonly />
                                    </div>
                                </div>
        
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection