<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Your general profile information is synced with your GitHub account,
                    and is refreshed any time you log in. You can also force a resync by clicking
                    <a href="{{ route('app.settings.account.resync') }}">here</a>.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">

            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="username"
                                   class="block text-sm font-medium leading-5 text-gray-700">
                                Username
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                      class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    https://usaf.xyz/users/
                                </span>
                                <input id="username"
                                       name="username"
                                       class="flex-1 block w-full transition duration-150 ease-in-out rounded-none form-input rounded-r-md sm:text-sm sm:leading-5"
                                       placeholder="username"
                                       value="{{ auth()->user()->username }}"
                                       readonly />
                            </div>
                        </div>
                    </div>

                    <!-- Blog -->
                    <div class="mt-6">
                        <label for="about"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Website
                        </label>
                        <div class="rounded-md shadow-sm">
                            <input class="block w-full mt-1 transition duration-150 ease-in-out form-input sm:text-sm sm:leading-5"
                                   placeholder="Your website"
                                   value="{{ auth()->user()->blog }}"
                                   readonly>
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="mt-6">
                        <label for="about"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Bio
                        </label>
                        <div class="rounded-md shadow-sm">
                            <textarea id="about"
                                      rows="3"
                                      class="block w-full mt-1 transition duration-150 ease-in-out form-textarea sm:text-sm sm:leading-5"
                                      placeholder="Your GitHub Bio"
                                      readonly>{{ auth()->user()->bio }}</textarea>
                        </div>
                    </div>

                    <!-- Avatar -->
                    <div class="mt-6">
                        <label for="photo"
                               class="block text-sm font-medium leading-5 text-gray-700">
                            Avatar
                        </label>
                        <div class="flex items-center mt-2">
                            <span
                                  class="inline-block w-12 h-12 overflow-hidden bg-gray-100 rounded">
                                <img src="{{ auth()->user()->avatar }}"
                                     alt="{{ auth()->user()->name }}">
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
                    <div class="max-w-xl mt-2 text-sm leading-5 text-gray-500">
                        <p>
                            When your account is deleted, the following actions will occur:
                        </p>
                        <ul class="my-2 text-sm text-gray-500 list-disc list-inside">
                            <li>All package submissions you made will be deleted</li>
                            <li>All templates you authored will be deleted</li>
                            <li>Any packages that have you listed as a contributor will be updated and you will be removed</li>
                            <li>You will receive an email confirming that we have deleted your account</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <x-form-button method="delete" :action="route('app.settings.account.delete')">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 font-medium text-red-700 transition duration-150 ease-in-out bg-red-100 border border-transparent rounded-md hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 sm:text-sm sm:leading-5">
                                Delete account
                            </button>
                        </x-form-button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endpush