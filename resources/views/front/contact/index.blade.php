<x-layout>


    <x-slot:title>
        {!! config('app.name') !!} - {{ __('nav.contact-us') }}
    </x-slot>



        <section class="py-20 bg-white dark:bg-gray-900">
            {{-- <x-alert role="alert">Alert</x-alert> --}}

            <div class="container mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <div>
                    <p class="font-medium text-blue-500 dark:text-blue-400">
                        {{ __('contact.contact') }}
                    </p>

                    <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">{{ __('contact.chat') }}</h1>

                    <p class="mt-3 text-gray-500 dark:text-gray-400">
                        {{ __('contact.always-love') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-2">
                    <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">{{ __('contact.email') }}</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ __('contact.professional') }}
                            </p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">info@urbanfurniva.com</p>
                        </div>

                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white"> {{ __('contact.live-chat') }}</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ __('contact.chat-with') }}
                            </p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">
                                {{ __('contact.start') }}
                            </p>
                        </div>

                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">{{ __('contact.headquarters') }}</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ __('contact.visit') }}
                            </p>
                            <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">
                                {{ __('about.head-location-desc') }}
                            </p>
                        </div>

                        <div>
                            <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">{{ __('contact.phone') }}</h2>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Sat-Thur from 9am to 6pm.</p>

                            <div class="flex flex-col items-start mt-5 space-y-2">
                                <a href="tel:+966538383995" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">
                                    <span class="number_ltr">
                                        <span class=""> +966538383995</span>
                                    </span>
                                </a>

                            </div>


                        </div>
                    </div>

                    <div class="p-4 py-6 rounded-lg bg-gray-50 dark:bg-gray-800 md:p-8">



                        {{-- <x-contact-form /> --}}


                        @livewire('contact-live-wire')


                    </div>
                </div>
            </div>
        </section>









{{--
        <section class="py-20 bg-white dark:bg-gray-900">
            <div class="container mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">


                <div class="border-b mb-20 flex justify-between text-sm">
                    <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-400 uppercase">

                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-3 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                          </svg>

                        <a href="#" class="font-semibold inline-block text-2xl text-gray-600">الأسئلة الشائعة</a>
                    </div>
                    <a href="#">See All</a>
                </div>

        <div class='accordion-group' data-accordion="default-accordion">
            <div class='accordion border border-solid border-gray-300 p-4 rounded-xl transition duration-500 accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4' id='basic-heading-one-with-icon'>
            <button class='accordion-toggle group  inline-flex items-center justify-between text-left text-base leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 ' aria-controls='basic-collapse-one-with-icon'>
             <h5> How can I reset my password? </h5>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600 origin-center' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18M12 18V6' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
            </button>
            <div id='basic-collapse-one-with-icon' class='accordion-content w-full  overflow-hidden pr-4' aria-labelledby='basic-heading-one'>
             <p class='text-base text-gray-900 leading-6'>To create an account, find the 'Sign up' or 'Create account' button, fill out the registration form with your personal information, and click 'Create account' or 'Sign up.' Verify your email address if needed, and then log in to start using the platform.</p>
            </div>
            </div>
            <div class='accordion border border-solid border-gray-300 p-4 rounded-xl  accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4' id='basic-heading-two-with-icon'>
            <button class='accordion-toggle group  inline-flex items-center justify-between text-left text-base leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 ' aria-controls='basic-collapse-two-with-icon'>
             <h5> How do I update my billing information? </h5>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18M12 18V6' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
            </button>
            <div id='basic-collapse-two-with-icon' class='accordion-content w-full  overflow-hidden   pr-4' aria-labelledby='basic-heading-two'>
             <p class='text-base text-gray-900 leading-6'>To create an account, find the 'Sign up' or 'Create account' button, fill out the registration form with your personal information, and click 'Create account' or 'Sign up.' Verify your email address if needed, and then log in to start using the platform.</p>
            </div>
            </div>
            <div class='accordion border border-solid border-gray-300 p-4 rounded-xl accordion-active:bg-indigo-50 accordion-active:border-indigo-600 mb-8 lg:p-4' id='basic-heading-three-with-icon'>
            <button class='accordion-toggle group  inline-flex items-center justify-between text-left text-base leading-8 text-gray-900 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 ' aria-controls='basic-collapse-three-with-icon'>
             <h5> How can I contact customer support? </h5>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 block accordion-active:text-indigo-600 accordion-active:hidden group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18M12 18V6' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
             <svg class='w-6 h-6 text-gray-900 transition duration-500 hidden accordion-active:text-indigo-600 accordion-active:block group-hover:text-indigo-600' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
               <path d='M6 12H18' stroke='currentColor' stroke-width='1.6' stroke-linecap='round' stroke-linejoin='round'></path>
             </svg>
            </button>
            <div id='basic-collapse-three-with-icon' class='accordion-content w-full  overflow-hidden   pr-4 ' aria-labelledby='basic-heading-three'>
             <p class='text-base text-gray-900 leading-6'>To create an account, find the 'Sign up' or 'Create account' button, fill out the registration form with your personal information, and click 'Create account' or 'Sign up.' Verify your email address if needed, and then log in to start using the platform.</p>
            </div>
            </div>
            </div>


            </div>

        </section> --}}





{{--

        <div x-data="{
            activeAccordion: '',
            setActiveAccordion(id) {
                this.activeAccordion = (this.activeAccordion == id) ? '' : id
            }
        }" class="relative w-full max-w-md mx-auto text-xs">

        <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                <span>What is Pines?</span>
                <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                    <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                    <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                </div>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-5 pt-0 opacity-70">
                    Pines is a UI library built for AlpineJS and TailwindCSS.
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                <span>How do I install Pines?</span>
                <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                    <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                    <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                </div>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-5 pt-0 opacity-70">
                    Add AlpineJS and TailwindCSS to your page and then copy and paste any of these elements into your project.
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white border rounded-md cursor-pointer group" x-cloak>
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full px-5 py-4 font-semibold text-left select-none">
                <span>Can I use Pines with other libraries or frameworks?</span>
                <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
                    <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                    <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
                </div>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-5 pt-0 opacity-70">
                    Absolutely! Pines works with any other library or framework. Pines works especially well with the TALL stack.
                </div>
            </div>
        </div>
    </div> --}}


</x-layout>
