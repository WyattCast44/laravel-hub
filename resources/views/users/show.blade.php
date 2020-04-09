@extends('users.layout-new')

@section('user-page')

@if($user->unclaimed)

        <div x-data="{ show: true }">
            <div class="p-4 bg-red-100 rounded-md shadow" x-show="show">
                <div class="flex" >
                    <div class="flex-shrink-0">
                        @svg('alert-triangle', 'w-5 h-5 text-red-400')
                    </div>
                    <div class="ml-3">
                        <p class="text-red-800">
                            This account was automatically created when one of thier packages was submitted. If you are the owner and want to claim this account, all you have to do is sign in with your GitHub account. If you would like this account page removed and your packages removed, please reach out <a href="#">here</a>.
                        </p>
                    </div>
                    <div class="pl-3 ml-auto">
                        <div class="-mx-1.5 -my-1.5">
                            <button
                                    class="inline-flex rounded-md p-1.5 text-red-500 hover:bg-red-300 focus:outline-none focus:bg-red-300 transition ease-in-out duration-150" x-on:click="show = false">
                                <svg class="w-5 h-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection
