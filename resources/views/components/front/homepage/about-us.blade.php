<section class="bg-white dark:bg-gray-900 py-6">
    <div class="gap-20 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
        <div class="font-light text-gray-900 sm:text-lg dark:text-gray-400">


            <div>
                <div class="border-b mb-14 flex justify-between text-sm">
                    <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-400 uppercase">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-3 ltr:mr-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>

                        <a href="{{ route('about.us') }}" class="font-semibold inline-block text-2xl text-gray-600 hover:text-blue-600">
                            {{ __('homepage.about-company') }}
                        </a>
                    </div>
                    {{-- <a href="#">See All</a> --}}
                </div>


                {{-- <h2 class="mb-12 text-4xl tracking-tight font-extrabold text-gray-800 dark:text-gray-200">عن الشركة</h2> --}}
                <p class="mb-10 leading-10 text-gray-600">
                    {{ __('homepage.about-company-desc-1') }}

                </p>
                <p class="leading-10 text-gray-600">

                    {{ __('homepage.about-company-desc-2') }}


                </p>
            </div>


            <div class="w-full my-5 flex justify-end">


                <a href="{{  route('about.us') }}"
                    class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                    <span
                        class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">
                        {{ __('whyus.read-more') }}
                    </span>
                    <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#4F46E5" stroke-width="1.6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>

                </a>
            </div>


        </div>



        <div class="grid grid-cols-2 gap-4">
            <img class="w-full rounded-lg h-80" src="{{ asset('images/slider/2.webp') }}" alt="office content 1">
            <img class="mt-4 w-full h-80 lg:mt-10 rounded-lg" src="{{ asset('images/slider/3.webp') }}" alt="office content 2">
        </div>
    </div>
</section>
