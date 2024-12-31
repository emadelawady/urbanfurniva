


<div class="bg-white dark:bg-gray-800 py-6 pt-24 pb-24 mt-20 sm:py-8 lg:py-12 number_rtl">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 md:px-8">
        <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
            <div class="flex items-center gap-12">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">
                    {{ __('homepage.our-works') }}
                </h2>

                <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                    {{ __('homepage.our-works-desc') }}
                </p>
            </div>

            <a href="{{ route('our.works') }}"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                {{ __('messages.learn-more') }}
            </a>
        </div>

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="{{ asset('storage/kitchen/kitchens/4/1_4.jpg') }}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative mr-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">

                                            <!-- info Badge -->
                    <span class="w-fit inline-flex overflow-hidden rounded-md border border-sky-500 bg-white text-xs font-medium text-sky-700 dark:border-sky-500 dark:bg-neutral-950 dark:text-sky-500">
                        <span class="flex items-center gap-1 bg-sky-500/10 px-2 py-1 text-primary dark:bg-sky-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="size-4">
                                <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('messages.quality') }}
                        </span>
                    </span>
                </span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="javascript:void(0)"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="{{ asset('storage/kitchen/kitchens/2/1_5.jpg') }}" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative mr-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">

                        <!-- success Badge -->
                    <span class="w-fit inline-flex overflow-hidden rounded-md border border-green-500 bg-white text-xs font-medium text-green-500 dark:border-green-500 dark:bg-neutral-950 dark:text-green-500">
                        <span class="flex items-center gap-1 bg-green-500/10 px-2 py-1 dark:bg-green-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="size-4">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('messages.best-price') }}
                        </span>
                    </span>

                </span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="javascript:void(0)"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="{{ asset('storage/kitchen/kitchens/7/1_3.jpg') }}" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative mr-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">
                    <span class="w-fit inline-flex overflow-hidden rounded-md border border-green-500 bg-white text-xs font-medium text-green-500 dark:border-green-500 dark:bg-neutral-950 dark:text-green-500">
                        <span class="flex items-center gap-1 bg-green-500/10 px-2 py-1 dark:bg-green-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="size-4">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('messages.best-price') }}
                        </span>
                    </span>

                </span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="javascript:void(0)"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="{{ asset('storage/kitchen/kitchens/1/1_3.jpg') }}" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative mr-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">

                    <span class="w-fit inline-flex overflow-hidden rounded-md border border-sky-500 bg-white text-xs font-medium text-sky-700 text-primary dark:border-sky-500 dark:bg-neutral-950 dark:text-sky-500">
                        <span class="flex items-center gap-1 bg-sky-500/10 px-2 py-1 dark:bg-sky-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="size-4">
                                <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"/>
                            </svg>
                            {{ __('messages.quality') }}
                        </span>
                    </span>
                </span>
            </a>
            <!-- image - end -->
        </div>
    </div>
</div>
