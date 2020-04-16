@extends('packages.show.layout')

@include('partials.yaml-editor-scripts')

@section('package-page')

    <div class="p-6 md:p-10">
        
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Repo Details</h3>
                        <p class="inline mt-1 text-sm leading-5 text-gray-500">
                            This information is synced with GitHub and is refreshed every 15 minutes. You
                            can trigger a refresh once every 5 minutes by clicking <x-form-button class="inline p-0 m-0 text-sm text-red-500" method="post" :action="$package->route('resync')">
                                <button type="submit" class="cursor-pointer text-red hover:underline">here</button>
                            </x-form-button>.                            
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#"
                          method="POST">
                        <div class="sm:overflow-hidden">
                            <div class="px-4 py-6 sm:py-0 sm:px-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email_address"
                                               class="block text-sm font-medium leading-5 text-gray-700">Package Vendor</label>
                                        <input id="email_address"
                                               class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" value="{{ $package->vendor }}" readonly/>
                                    </div>
                                </div>
        
                                <div class="mt-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email_address"
                                               class="block text-sm font-medium leading-5 text-gray-700">Package Name</label>
                                        <input id="email_address"
                                               class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" value="{{ $package->name }}" readonly />
                                    </div>
                                </div>
        
                                <div class="mt-6">
                                    <label for="about"
                                        class="block text-sm font-medium leading-5 text-gray-700">
                                        Description
                                    </label>
                                    <div class="rounded-md shadow-sm">
                                        <textarea id="about"
                                                rows="3"
                                                class="block w-full mt-1 transition duration-150 ease-in-out form-textarea sm:text-sm sm:leading-5"
                                                readonly>{{ $package->description }}</textarea>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email_address"
                                               class="block text-sm font-medium leading-5 text-gray-700">Repo URL</label>
                                        <input id="email_address"
                                               class="block w-full px-3 py-2 mt-1 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" value="{{ $package->repo_url }}" readonly />
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <label for="about"
                                        class="block text-sm font-medium leading-5 text-gray-700">
                                        Meta
                                    </label>
                                    <p class="my-1 text-sm text-gray-600">
                                        This is the data we use to create/update your package. Only you can see this data.
                                    </p>
                                    <div class="rounded-md shadow-sm">
                                        <div 
                                            id="ace-editor" 
                                            class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
                                            style="min-height: 250px"
                                            data-ace-lang="json"
                                            data-ace-min-lines="5"
                                            data-ace-max-lines="20"
                                            data-ace-readonly="true"
                                            >{{ $package->meta }}</div>
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