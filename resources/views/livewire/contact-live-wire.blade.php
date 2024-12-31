<div>



<form method="POST" wire:submit="save">


    <div class="w-full md:flex md:items-center md:md:justify-around lg:justify-center md:gap-4">

        <div class="w-full">

            <label
            for="FirstName"
            class="relative bg-white block overflow-hidden rounded-md border-b border-gray-200 px-1 pt-1 shadow-sm"
            >
                <input
                    type="text"
                    id="FirstName"
                    placeholder="{{ __('contact.first') }}"
                    wire:model="first_name"
                    class="peer h-12 w-full border-none bg-transparent p-0 pt-1 mt-1 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xs"
                />

                <span
                    class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs"
                >
                {{ __('contact.your-name') }}
                </span>
            </label>

            <div class="flex items-center h-10">

                @error('first_name')
                    <span class="error">

                        <small class="pl-0.5 text-red-500">{{ $message }}</small>

                    </span>

                @enderror
            </div>

        </div>


        <div class="w-full">

            <label
            for="LastName"
            class="relative bg-white block overflow-hidden rounded-md border-b border-gray-200 px-1 pt-1 shadow-sm"
            >
                <input
                    type="text"
                    id="LastName"
                    placeholder="{{ __('contact.last') }}"
                    wire:model="last_name"
                    class="peer h-12 w-full border-none bg-transparent p-0 pt-1 mt-1 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xs"
                />

                <span
                    class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs"
                >
                {{ __('contact.family') }}
                </span>
            </label>

            <div class="flex items-center h-10">

                @error('last_name')
                    <span class="error">

                        <small class="pl-0.5 text-red-500">{{ $message }}</small>

                    </span>

                @enderror
            </div>

        </div>


    </div>



    <div class="w-full mt-3">

        <label
        for="phone"
        class="relative bg-white block overflow-hidden rounded-md border border-gray-200 px-1 pt-1 shadow-sm"
        >
            <input
                type="number"
                id="phone"
                placeholder="{{ __('contact.phone') }}"
                wire:model="phone"
                class="peer h-12 w-full border-none bg-transparent p-0 pt-1 mt-1 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-xs"
            />

            <span
                class="absolute start-3 top-3 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-3 peer-focus:text-xs"
            >
            {{ __('contact.enter-phone') }}
            </span>
        </label>

        <div class="flex items-center h-10">

            @error('phone')
                <span class="error">

                    <small class="pl-0.5 text-red-500">{{ $message }}</small>

                </span>

            @enderror
        </div>

    </div>



    <div class="w-full my-3">
        <label for="content" class="block text-sm font-medium text-gray-700">
            {{-- {{ __('contact.message-sub') }} --}}
        </label>

        <textarea
            id="content"
            wire:model="content"
            class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
            rows="8"
            placeholder="{{ __('contact.message') }}"
        ></textarea>



        <div class="flex items-center h-10">

            @error('content')
                <span class="error">

                    <small class="pl-0.5 text-red-500">{{ $message }}</small>

                </span>

            @enderror
        </div>
    </div>


    <button type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-app-orange-2 rounded-lg hover:bg-app-orange focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
        {{ __('contact.send-message') }}
    </button>
</form>


</div>



