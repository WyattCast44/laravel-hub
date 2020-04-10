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
