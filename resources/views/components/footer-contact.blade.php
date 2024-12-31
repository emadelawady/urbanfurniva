<footer class="bg-white dark:bg-gray-900 pt-10">
    <div class="container mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">


        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">


        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div>
                <p class="font-semibold text-gray-800 dark:text-white">
                    {{ __('footer.quick-links') }}
                </p>

                <div class="flex flex-col items-start mt-5 space-y-2">

                    <a href="{{ route('home.page') }}" class="{{ Route::is('home.page') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">
                        {{ __('footer.footer-home') }}
                    </a>

                    <a href="{{ route('about.us') }}" class="{{ Route::is('about.us') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">

                        {{ __('footer.footer-about-us') }}
                    </a>

                    <a href="{{ route('contact.us') }}" class="{{ Route::is('contact.us') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">
                        {{ __('footer.footer-contact-us') }}
                    </a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">
                    {{ __('footer.footer-about-company') }}
                </p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="{{ route('why.us') }}" class="{{ Route::is('why.us') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">

                        {{ __('footer.footer-why-urban') }}
                    </a>
                    {{-- <a href="{{ route('kitchens') }}" class="{{ Route::is('kitchens') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">المطابخ</a> --}}
                    <a href="{{ route('our.works') }}" class="{{ Route::is('our.works') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">
                        {{ __('footer.footer-our-works') }}
                    </a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">
                    {{ __('footer.footer-our-services') }}
                </p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="{{ route('kitchens') }}" class="{{ Route::is('kitchens') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">
                        {{ __('footer.footer-kitchens') }}
                    </a>

                    <a href="{{ route('furniture') }}" class="{{ Route::is('furniture') ? 'text-app-orange' : 'text-gray-700'; }} transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-app-orange-2">
                        {{ __('footer.footer-furniture') }}
                    </a>
                </div>
            </div>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">
                    {{ __('footer.footer-contact-us') }}
                </p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="tel:+966538383995" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">
                        <span class="number_ltr">
                            <span class=""> {{ $setting->phone }} </span>
                        </span>
                    </a>
                    <a href="mailto:info@land-reach.com" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">
                        {{ $setting->email }}
                    </a>
                </div>
            </div>

        </div>


        <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

        <div class="flex flex-col items-center justify-between sm:flex-row">

            <a href="{{ route('home.page') }}" class="flex flex-col text-xl text-center text-app-orange ubuntu-font tracking-normal leading-5">
                {{-- <img class="w-auto h-16 m-auto rounded-full" src="{{ asset('images/land-logo-2.png') }}" alt=""> --}}



                {{ explode(' ', $setting?->website_title)[0]; }}

                <span class="text-black font-bold tracking-wide ubuntu-font text-sm rounded-md">

                    {{ strstr($setting?->website_title, ' '); }}

                </span>



                {{-- Urban<span class="text-black font-bold tracking-wide ubuntu-font text-sm rounded-md">Furniva</span> --}}



            </a>
            <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-300">


                @if (app()->getLocale('locale') == 'en')

                    {{ 'Copyright Urban Forniva 2024. All rights reserved ©' }}


                @endif

                @if (app()->getLocale('locale') == 'ar')

                    {{ $setting->copyrights }}

                @endif



            </p>
        </div>


    </div>
</footer>

