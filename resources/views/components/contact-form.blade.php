@if(session('success'))
<x-alert role="alert">
    {{ session('success') }}
</x-alert>
@endif




<form method="POST" action="{{ route("contact.us.post") }}">
    @csrf
    <div class="-mx-2 md:items-center md:flex">
        <div class="flex-1 px-2">
            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('contact.first') }}</label>
            <input type="text" name="first_name" placeholder="{{ __('contact.your-name') }}" class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>

        <div class="flex-1 px-2 mt-4 md:mt-0">
            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('contact.last') }}</label>
            <input type="text" name="last_name" placeholder="{{ __('contact.family') }}" class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
        </div>
    </div>

    <div class="mt-4">
        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('contact.phone') }}</label>
        <input type="number" name="phone" class="block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="{{ __('contact.enter-phone') }}" />
    </div>

    <div class="w-full mt-4">
        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">{{ __('contact.message-sub') }}</label>
        <textarea name="content" class="block w-full h-32 px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="{{ __('contact.message') }}"></textarea>
    </div>

    <button type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-app-orange-2 rounded-lg hover:bg-app-orange focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
        {{ __('contact.send-message') }}
    </button>
</form>
