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

<div class="hidden sm:block">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Decide which communications you'd like to receive and how.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#"
                  method="POST">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <fieldset>
                            <legend class="text-base font-medium leading-6 text-gray-900">By Email
                            </legend>
                            <div class="mt-4">
                                <div class="flex items-start">
                                    <div class="absolute flex items-center h-5">
                                        <input id="comments"
                                               type="checkbox"
                                               class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
                                    </div>
                                    <div class="text-sm leading-5 pl-7">
                                        <label for="comments"
                                               class="font-medium text-gray-700">Comments</label>
                                        <p class="text-gray-500">Get notified when someones posts a
                                            comment on a
                                            posting.</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="absolute flex items-center h-5">
                                            <input id="candidates"
                                                   type="checkbox"
                                                   class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
                                        </div>
                                        <div class="text-sm leading-5 pl-7">
                                            <label for="candidates"
                                                   class="font-medium text-gray-700">Candidates</label>
                                            <p class="text-gray-500">Get notified when a candidate
                                                applies for a job.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="flex items-start">
                                        <div class="absolute flex items-center h-5">
                                            <input id="offers"
                                                   type="checkbox"
                                                   class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
                                        </div>
                                        <div class="text-sm leading-5 pl-7">
                                            <label for="offers"
                                                   class="font-medium text-gray-700">Offers</label>
                                            <p class="text-gray-500">Get notified when a candidate
                                                accepts or rejects an
                                                offer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="mt-6">
                            <legend class="text-base font-medium leading-6 text-gray-900">Push
                                Notifications
                            </legend>
                            <p class="text-sm leading-5 text-gray-500">These are delivered via SMS
                                to your mobile
                                phone.</p>
                            <div class="mt-4">
                                <div class="flex items-center">
                                    <input id="push_everything"
                                           name="form-input push_notifications"
                                           type="radio"
                                           class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-radio" />
                                    <label for="push_everything"
                                           class="ml-3">
                                        <span
                                              class="block text-sm font-medium leading-5 text-gray-700">Everything</span>
                                    </label>
                                </div>
                                <div class="flex items-center mt-4">
                                    <input id="push_email"
                                           name="form-input push_notifications"
                                           type="radio"
                                           class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-radio" />
                                    <label for="push_email"
                                           class="ml-3">
                                        <span
                                              class="block text-sm font-medium leading-5 text-gray-700">Same
                                            as
                                            email</span>
                                    </label>
                                </div>
                                <div class="flex items-center mt-4">
                                    <input id="push_nothing"
                                           name="form-input push_notifications"
                                           type="radio"
                                           class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-radio" />
                                    <label for="push_nothing"
                                           class="ml-3">
                                        <span
                                              class="block text-sm font-medium leading-5 text-gray-700">No
                                            push
                                            notifications</span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                        <button
                                class="inline-flex items-center justify-center px-4 py-2 font-medium text-red-700 transition duration-150 ease-in-out bg-red-100 border border-transparent rounded-md hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('footer')

<script>
    function confirmAccountDeletion() {
        console.log('clicked');
    }
</script>

@endpush