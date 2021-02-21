<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm leading-5 text-gray-600">
                    Your general profile information is synced with your GitHub account,
                    and is refreshed any time you log in. You can also force a resync by clicking
                    <x-form-button method="post" :action="route('app.settings.account.resync')">
                        <button type="submit" class="text-red-500 hover:underline">here</button>
                    </x-form-button>
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">

            <!-- Github Read-Only Fields -->
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white sm:p-6">

                    <!-- Username -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="username"
                                   class="block text-sm font-medium leading-5 text-gray-700">
                                Username
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                      class="inline-flex items-center px-3 text-sm text-gray-600 bg-gray-100 border border-r-0 border-gray-300 rounded-l-md">
                                    {{ config('app.url') }}/
                                </span>
                                <input 
                                    type="text"
                                    id="username"
                                    name="username"
                                    class="flex-1 block w-full transition duration-150 ease-in-out rounded-none form-input rounded-r-md sm:text-sm sm:leading-5"
                                    placeholder="username"
                                    value="{{ auth()->user()->username }}"
                                    readonly />
                            </div>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="mt-6">
                        <label for="website"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Website
                        </label>
                        <div class="rounded-md shadow-sm">
                            <input 
                                readonly
                                type="text"
                                id="website"
                                placeholder="Your website"
                                value="{{ auth()->user()->blog }}"
                                class="block w-full mt-1 transition duration-150 ease-in-out form-input sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="mt-6">
                        <label for="bio"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Bio
                        </label>
                        <div class="rounded-md shadow-sm">
                            <textarea id="bio"
                                      rows="3"
                                      class="block w-full mt-1 transition duration-150 ease-in-out form-textarea sm:text-sm sm:leading-5"
                                      placeholder="Your GitHub Bio"
                                      readonly>{{ auth()->user()->bio }}</textarea>
                        </div>
                    </div>

                    <!-- Avatar -->
                    <div class="mt-6">
                        <label for="avatar"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Avatar
                        </label>
                        <div class="flex items-center mt-2">
                            <span
                                  class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded">
                                <img
                                    id="avatar" 
                                    src="{{ auth()->user()->avatar }}"
                                    alt="{{ auth()->user()->name }}'s avatar">
                            </span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Account deletion pane -->
            <div class="mt-6 bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Delete your account
                    </h3>
                    <div class="max-w-xl mt-2 text-sm leading-5 text-gray-600">
                        <p>
                            When your account is deleted, the following actions will occur:
                        </p>
                        <ul class="my-2 text-sm text-gray-600 list-disc list-inside">
                            <li>All templates you authored will be deleted</li>
                            <li>You will receive an email confirming that we have deleted your account</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        
                        <x-form-button method="delete" :action="route('app.settings.account.delete')">

                            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 font-medium text-red-700 bg-red-100 border border-red-300 rounded-md hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm ">
                                Delete account
                              </button>
                              
                        </x-form-button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>