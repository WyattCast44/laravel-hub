<div class="bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:p-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
          Delete your account
      </h3>
      <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
          <p>
          Once you delete your account, you will lose all data associated with it. All your packages on Larahub will be deleted from our repository, they will still exist on your source control platform but will no longer appear here. Additionally
          any templates you have created will also be deleted. However, any forks of your templates will continue to exists and work.
          </p>
      </div>
      <div class="mt-5">
          <x-form-button method="delete" :action="route('app.settings.account.delete')">
              <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Delete account
              </button>
          </x-form-button>
      </div>
  </div>
</div>
