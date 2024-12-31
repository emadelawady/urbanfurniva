<x-layout>


    <x-slot:title>
        {!! config('app.name') !!} - {{ __('nav.about-us') }}
    </x-slot>


    <section class="mt-20 mx-24 m-auto">
        <div class="sm:flex items-center max-w-screen-xl">

            <div class="w-full p-5">
                <div class="text">


                    <x-verified>
                        {{ __('about.verified') }}
                    </x-verified>

                    <h2 class="my-8 font-extrabold text-5xl sm:text-4xl pb-4 text-app-orange">




                        @if (app()->getLocale('locale') == 'en')

                            {{ __('about.about') }}

                        <span class="text-black font-extralight">

                            {{ __('about.us') }}

                        </span>


                        @endif

                        @if (app()->getLocale('locale') == 'ar')

                            {{ __('about.about') }}

                        <span class="text-black font-extralight">

                            {{ __('about.us') }}

                        </span>


                        @endif







                    </h2>

                    <div class="w-full my-6">
                        <p class="text-sky-400 leading-10">
                            {{ __('homepage.about-company-desc-1') }}
                        </p>
                    </div>
                    <div class="w-full my-6">
                        <p class="text-sky-400 leading-10">
                            {{ __('homepage.about-company-desc-2') }}
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="sm:w-1/2 p-10">
                <div class="image object-center text-center">
                    <img src="https://i.imgur.com/WbQnbas.png">
                </div>
            </div> --}}
        </div>
    </section>




<section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">


                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex my-10">
                        <x-heading
                            class="text-slate-800 text-4xl font-bold leading-normal lg:text-start text-center mb-8">

                            {{-- <span class="text-sky-800">قـ</span><span>ـصـ</span>تنا --}}
                            {{ __('about.mission') }}
                        </x-heading>
                        <p class="text-gray-500 text-base font-normal leading-10 lg:text-start text-right">
                            {{ __('about.mission-desc') }}
                        </p>
                    </div>



                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex my-10">
                        <h2
                            class="text-slate-800 text-4xl font-bold leading-normal lg:text-start text-center mb-4">

                            {{-- <span class="text-sky-800">قـ</span><span>ـصـ</span>تنا --}}
                            {{ __('about.vision') }}
                        </h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-right">
                            {{ __('about.vision-desc') }}
                        </p>
                    </div>



                    {{-- <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                        <div class="flex-col justify-start items-start inline-flex">
                            <h3 class="text-gray-900 text-4xl font-bold leading-normal">5+</h3>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">
                                {{ __('about.experience') }}
                            </h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-gray-900 text-4xl font-bold leading-normal">125+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">
                                {{ __('about.completed-project') }}
                            </h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-gray-900 text-4xl font-bold leading-normal">52+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed">
                                {{ __('about.happy-clients') }}
                            </h6>
                        </div>
                    </div> --}}



                </div>



                {{-- <button
                    class="sm:w-fit w-full px-3.5 py-2 bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6">اقرأ المزيد</span>
                </button> --}}
            </div>

            <div
                class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-last order-fisrt">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="w-full h-96 rounded-xl object-cover" src="{{  asset('images/slider/1.webp') }}" alt="about Us image" />
                </div>
                <img class="w-full sm:ml-0 h-96 m-auto rounded-xl object-cover" src="{{  asset('images/slider/2.webp') }}"
                    alt="about Us image" />
            </div>
        </div>
    </div>
</section>





<section class="mb-32 mx-24 m-auto">
    <div class="sm:flex items-center max-w-screen-xl">

        <div class="w-full p-5 my-10">
            <div class="text">

                <x-heading class="!my-10 font-extrabold text-5xl sm:text-4xl pb-0 text-app-orange">


                        {{ __('about.what-we-do') }}

                </x-heading>

                <div class="w-full">
                    <p class="text-sky-400 leading-10 text-xl my-5">
                        {{ __('about.what-we-do-desc') }}
                    </p>
                    <p class="text-sky-400 leading-10 text-xl my-5">
                        {{ __('about.what-we-do-desc-1') }}
                    </p>
                    <p class="text-sky-400 leading-10 text-xl my-5">
                        {{ __('about.what-we-do-desc-2') }}
                    </p>
                    <p class="text-sky-400 leading-10 text-xl my-5">
                        {{ __('about.what-we-do-desc-4') }}
                    </p>
                    <p class="text-sky-400 leading-10 text-xl my-5">
                        {{ __('about.what-we-do-desc-3') }}
                    </p>
                </div>
            </div>
        </div>
        {{-- <div class="sm:w-1/2 p-10">
            <div class="image object-center text-center">
                <img src="https://i.imgur.com/WbQnbas.png">
            </div>
        </div> --}}
    </div>
</section>






<section class="py-14 lg:py-24 relative z-0 bg-gray-50 area">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center circles">
        <h1
            class="max-w-2xl mx-auto text-center font-bold text-4xl  text-gray-900 mb-5 md:text-5xl md:leading-normal">
            {{ __('about.participate') }}

            <span class="text-indigo-600 text-4xl">
                {{ __('about.partners') }}
            </span>
        </h1>
        <p class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9">

            {{ __('about.cooperation') }}

        </p>


        <div class="mb-4 flex items-center justify-center text-center gap-8 sm:mb-8 md:mb-12">


            <a href="{{ route('contact.us') }}"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                {{ __('messages.design-your-kitchen') }}
            </a>
            <a href="{{ route('contact.us') }}"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                {{ __('messages.maintenance-request') }}
            </a>

            <a href="{{ route('contact.us') }}"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                {{ __('messages.taking-measurements') }}
            </a>
        </div>
    </div>
</section>









<section class="relative mt-12">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <x-heading
                            class="text-slate-800 text-4xl font-bold leading-normal lg:text-start text-center mb-4">

                            {{-- <span class="text-sky-800">قـ</span><span>ـصـ</span>تنا --}}
                            {{ __('about.locations') }}
                        </x-heading>

                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-right">
                            {{ __('about.locations-desc') }}
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<x-front.about.outer-tabs />




<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">

        {{-- <h2 class="text-4xl font-bold tracking-tight text-center">Our Features</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome features below.</p> --}}

        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" /><circle cx="6" cy="14" r="3" /><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" /></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">
                    {{ __('about.dream-kitchen') }}
                </h4>
                <p class="text-base text-center text-gray-500">
                    {{ __('about.kitchen-design') }}
                </p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M18 8a3 3 0 0 1 0 6" /><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" /><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" /></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">
                    {{ __('about.pamper-kitchen') }}

                </h4>
                <p class="text-base text-center text-gray-500">

                    {{ __('about.our-goal') }}

                </p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">
                    {{ __('about.lifestyle') }}

                </h4>
                <p class="text-base text-center text-gray-500">
                    {{ __('about.based') }}

                    <span class="text-blue-600">
                        ({{ __('about.kingdom-of-women') }})
                    </span>

                    {{ __('about.always-strive') }}
                </p>
            </div>

        </div>
    </div>
</section>



{{--
<div class="p-20">
    <div class="text-center mb-16">
        <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
            الفريق التنفيذى
        </p>
        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
            قابل <span class="text-indigo-600">فريقنا</span> المحترف
        </h3>
    </div>


    <div class="sm:grid grid-cols-2 md:grid-cols-4 col-gap-10 mx-auto">

        <div class="text-center">
            <a href="#"><img class="mb-3 rounded-xl mx-auto h-32 w-32" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"></a>

            <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold">john doe</a>
            <p class="text-gray-500 uppercase text-sm">Web Developer</p>

            <div class="my-4 flex justify-center items-center">
                <a href="#">
                    <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="Layer 2">
                            <g data-name="facebook">
                                <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                <path
                                    d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                </path>
                            </g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                        <g id="XMLID_826_">
                            <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                        </g>
                    </svg></a>

                <a href="#"><svg width="19px" height="19px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                        xml:space="preserve">
                        <g>
                            <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                            <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                            <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                            <path style="fill:#FFFFFF;"
                                d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                            <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                        </g>
                    </svg></a>


            </div>

        </div>
        <div class="text-center">
            <a href="#"><img class="mb-3 rounded-xl mx-auto h-32 w-32" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"></a>

            <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold">john doe</a>
            <p class="text-gray-500 uppercase text-sm">Web Developer</p>

            <div class="my-4 flex justify-center items-center">
                <a href="#">
                    <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="Layer 2">
                            <g data-name="facebook">
                                <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                <path
                                    d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                </path>
                            </g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                        <g id="XMLID_826_">
                            <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                        </g>
                    </svg></a>

                <a href="#"><svg width="19px" height="19px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                        xml:space="preserve">
                        <g>
                            <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                            <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                            <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                            <path style="fill:#FFFFFF;"
                                d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                            <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                        </g>
                    </svg></a>


            </div>

        </div>
        <div class="text-center">
            <a href="#"><img class="mb-3 rounded-xl mx-auto h-32 w-32" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"></a>

            <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold">john doe</a>
            <p class="text-gray-500 uppercase text-sm">Web Developer</p>

            <div class="my-4 flex justify-center items-center">
                <a href="#">
                    <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="Layer 2">
                            <g data-name="facebook">
                                <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                <path
                                    d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                </path>
                            </g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                        <g id="XMLID_826_">
                            <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                        </g>
                    </svg></a>

                <a href="#"><svg width="19px" height="19px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                        xml:space="preserve">
                        <g>
                            <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                            <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                            <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                            <path style="fill:#FFFFFF;"
                                d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                            <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                        </g>
                    </svg></a>


            </div>

        </div>
        <div class="text-center">
            <a href="#"><img class="mb-3 rounded-xl mx-auto h-32 w-32" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"></a>

            <a href="#" class="hover:text-indigo-500 text-gray-900 font-semibold">john doe</a>
            <p class="text-gray-500 uppercase text-sm">Web Developer</p>

            <div class="my-4 flex justify-center items-center">
                <a href="#">
                    <svg class="mr-3" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g data-name="Layer 2">
                            <g data-name="facebook">
                                <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                <path
                                    d="M17 3.5a.5.5 0 0 0-.5-.5H14a4.77 4.77 0 0 0-5 4.5v2.7H6.5a.5.5 0 0 0-.5.5v2.6a.5.5 0 0 0 .5.5H9v6.7a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-6.7h2.62a.5.5 0 0 0 .49-.37l.72-2.6a.5.5 0 0 0-.48-.63H13V7.5a1 1 0 0 1 1-.9h2.5a.5.5 0 0 0 .5-.5z">
                                </path>
                            </g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="mr-3" width="16px" height="16px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                        <g id="XMLID_826_">
                            <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"></path>
                        </g>
                    </svg></a>

                <a href="#"><svg width="19px" height="19px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 239.04 239.04" style="enable-background:new 0 0 239.04 239.04;"
                        xml:space="preserve">
                        <g>
                            <path style="fill:#FFFFFF;" d="M167.809,36.555c-22.276-0.183-44.597-1.054-66.919-0.504c-25.851,0.642-46.018,2.2-61.281,22.872
		c-3.988,9.854-6.004,21.359-6.967,33.368c-0.183,3.163-0.367,6.417-0.596,9.763c-0.825,20.396,0.55,41.435,0.092,58.118
		c2.154,10.955,6.371,20.809,14.255,28.326c26.126,24.888,79.294,17.142,114.128,15.767c16.73-6.096,30.663-11.138,38.134-30.251
		c5.913-15.034,4.95-34.193,5.363-50.326C204.797,90.502,206.264,44.714,167.809,36.555z"></path>
                            <path d="M157.588,48.38c44.505,5.729,31.443,70.219,30.205,101.478c-0.688,17.188-3.758,30.48-21.496,36.438
		c-23.33,7.838-57.706,5.225-81.494,1.742c-15.905-2.292-28.372-7.059-32.772-23.559c-6.967-26.08-4.996-61.373-1.971-87.957
		c0.092-0.504,0.229-0.871,0.458-1.192C50.93,35.547,134.441,45.401,157.588,48.38z"></path>
                            <path style="fill:#FFFFFF;" d="M176.059,72.627c0.092-10.955-13.567-14.438-20.901-7.7c-1.971,1.833-2.888,4.629-3.025,7.654
		c0.733,3.896,3.071,7.746,6.096,9.946C165.334,87.523,175.967,80.877,176.059,72.627z"></path>
                            <path style="fill:#FFFFFF;"
                                d="M155.754,93.94c-15.675-23.742-51.06-26.08-70.081-5.042c-12.971,14.346-13.888,38.226-4.125,55.185
		c0.55,0.183,1.054,0.504,1.513,1.054c15.859,17.692,43.176,24.109,62.794,8.067C163.363,138.858,168.496,113.236,155.754,93.94z"></path>
                            <path d="M93.282,126.483c5.546,15.584,25.255,27.959,40.976,18.334c31.763-19.434-5.546-72.235-31.718-48.814
		C93.282,101.457,89.661,116.261,93.282,126.483z"></path>
                        </g>
                    </svg></a>


            </div>

        </div>

    </div>

</div> --}}





<section class="relative z-10 overflow-hidden bg-app-orange my-28 mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 rounded-lg shadow-lg">
  <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-2/3">
              <div class="text-center lg:text-left ">
                  <div class="mb-10 lg:mb-0 ">
                      <h1
                          class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-white text-right">
                            {{ __('about.modern-design') }}
                        </h1>
                      <p
                          class="w-full text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed text-white">
                      </p>
                  </div>
              </div>
          </div>
          <div class="w-full px-4 lg:w-1/3">
              <div class="text-center"><a
                      class="font-semibold rounded-lg mx-auto inline-flex items-center justify-center bg-white py-4 px-9 hover:bg-opacity-90"
                      href="{{ route('contact.us') }}">
                      {{ __('about.service-request') }}
                    </a>
              </div>
          </div>
      </div>
  </div>
  <span class="absolute top-0 right-0 -z-10">
      <svg width="388" height="250" viewBox="0 0 388 220" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z" fill="url(#paint0_linear_971_6910)"></path><defs><linearGradient id="paint0_linear_971_6910" x1="60.5" y1="111" x2="287" y2="111" gradientUnits="userSpaceOnUse"><stop offset="0.520507" stop-color="white"></stop><stop offset="1" stop-color="white" stop-opacity="0"></stop></linearGradient></defs></svg></span><span class="absolute top-0 right-0 -z-10"><svg width="324" height="250" viewBox="0 0 324 220" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.05" d="M203 -28.5L4.87819e-05 250.5L881.5 250.5L881.5 -28.5002L203 -28.5Z" fill="url(#paint0_linear_971_6911)"></path><defs><linearGradient id="paint0_linear_971_6911" x1="60.5" y1="111" x2="287" y2="111" gradientUnits="userSpaceOnUse"><stop offset="0.520507" stop-color="white"></stop><stop offset="1" stop-color="white" stop-opacity="0"></stop></linearGradient></defs></svg></span><span class="absolute top-4 left-4 -z-10"><svg width="43" height="56" viewBox="0 0 43 56" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><circle cx="40.9984" cy="1.49626" r="1.49626" transform="rotate(90 40.9984 1.49626)" fill="white"></circle><circle cx="27.8304" cy="1.49626" r="1.49626" transform="rotate(90 27.8304 1.49626)" fill="white"></circle><circle cx="14.6644" cy="1.49626" r="1.49626" transform="rotate(90 14.6644 1.49626)" fill="white"></circle><circle cx="1.49642" cy="1.49626" r="1.49626" transform="rotate(90 1.49642 1.49626)" fill="white"></circle><circle cx="40.9984" cy="14.6642" r="1.49626" transform="rotate(90 40.9984 14.6642)" fill="white"></circle><circle cx="27.8304" cy="14.6642" r="1.49626" transform="rotate(90 27.8304 14.6642)" fill="white"></circle><circle cx="14.6644" cy="14.6642" r="1.49626" transform="rotate(90 14.6644 14.6642)" fill="white"></circle><circle cx="1.49642" cy="14.6642" r="1.49626" transform="rotate(90 1.49642 14.6642)" fill="white"></circle><circle cx="40.9984" cy="27.8302" r="1.49626" transform="rotate(90 40.9984 27.8302)" fill="white"></circle><circle cx="27.8304" cy="27.8302" r="1.49626" transform="rotate(90 27.8304 27.8302)" fill="white"></circle><circle cx="14.6644" cy="27.8302" r="1.49626" transform="rotate(90 14.6644 27.8302)" fill="white"></circle><circle cx="1.49642" cy="27.8302" r="1.49626" transform="rotate(90 1.49642 27.8302)" fill="white"></circle><circle cx="40.9984" cy="40.9982" r="1.49626" transform="rotate(90 40.9984 40.9982)" fill="white"></circle><circle cx="27.8304" cy="40.9963" r="1.49626" transform="rotate(90 27.8304 40.9963)" fill="white"></circle><circle cx="14.6644" cy="40.9982" r="1.49626" transform="rotate(90 14.6644 40.9982)" fill="white"></circle><circle cx="1.49642" cy="40.9963" r="1.49626" transform="rotate(90 1.49642 40.9963)" fill="white"></circle><circle cx="40.9984" cy="54.1642" r="1.49626" transform="rotate(90 40.9984 54.1642)" fill="white"></circle><circle cx="27.8304" cy="54.1642" r="1.49626" transform="rotate(90 27.8304 54.1642)" fill="white"></circle><circle cx="14.6644" cy="54.1642" r="1.49626" transform="rotate(90 14.6644 54.1642)" fill="white"></circle><circle cx="1.49642" cy="54.1642" r="1.49626" transform="rotate(90 1.49642 54.1642)" fill="white"></circle></g>
      </svg>
  </span>
</section>




<style>
    /* .swiper-wrapper {
        height: max-content !important;

        width: max-content;
    }

    .swiper-button-next,
    .swiper-button-prev {
        top: 25%;
        z-index: 1000;
    }

    .swiper-button-next {
        right: -0px !important;
    }

    .swiper-button-prev {
        left: 0px !important;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: "" !important;
    }

    .mySwiper {
        max-width: 320px !important;
        margin: 0 auto !important;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: "" !important;
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:w-16 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-wrapper {
        height: max-content !important;
        padding-bottom: 64px !important;
    }

    .teamswiper .swiper-horizontal>.swiper-scrollbar,
    .teamswiper .swiper-scrollbar.swiper-scrollbar-horizontal {
        max-width: 140px !important;
        height: 3px !important;
        bottom: 25px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
        padding-top: 16px !important;
    }

    .teamswiper .swiper-slide.swiper-slide-active>.slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-pagination-total {
        color: rgb(156 163 175) !important;
    }

    .teamswiper .swiper-scrollbar-drag {
        background: rgb(79 70 229);
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
    }

    .teamswiper .swiper-button-prev:after,
    .teamswiper .swiper-rtl .swiper-button-next:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-prev {
        top: 93% !important;
        left: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next {
        top: 93% !important;
        right: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next:after,
    .teamswiper .swiper-rtl .swiper-button-prev:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-next svg,
    .teamswiper .swiper-button-prev svg {
        width: 24px !important;
        height: 24px !important;
    } */
</style>




</x-layout>
