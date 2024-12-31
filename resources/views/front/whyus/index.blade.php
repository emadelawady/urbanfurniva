<x-layout>


    <x-slot:title>
        {!! config('app.name') !!} - {{ __('nav.why-us') }}
    </x-slot>



    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
        {{-- <p class="mx-auto -mt-4 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6">
            مرحبا بكم
            <span class="border-b border-dotted border-slate-300">فى موقعنا</span>
        </p> --}}

        <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">


            @if (app()->getLocale('locale') == 'en')

                <span class="inline-block">
                    <span class="relative whitespace-nowrap">
                        <span class="relative text-app-orange">
                            {{ __('messages.urban') }}
                        </span>
                </span>
                </span>
                <span class="inline-block">
                    {{ __('messages.furniva') }}
                </span>

            @endif

            @if (app()->getLocale('locale') == 'ar')

                <span class="inline-block">
                    <span class="relative whitespace-nowrap">
                    <span class="relative text-app-orange">{{ __('messages.urban') }}</span></span>
                </span>
                <span class="inline-block">{{ __('messages.furniva') }}</span>
            @endif



        </h1>

        <p class="mx-auto mt-9 max-w-2xl text-lg tracking-tight text-slate-500 sm:mt-6">
            <span class="inline-block">
                {{ __('whyus.professional-guide') }}
            </span>
            <span class="inline-block">
                {{ __('whyus.aluminum-kitchen') }}
            </span>
        </p>

        {{-- <div class="mt-12 flex flex-col justify-center gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
            <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900 animate-fade-in-left"
                href="#">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24"
                    aria-hidden="true" class="h-3 w-3 flex-none" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.824 7.287c.008 0 .004 0 0 0zm-2.8-1.4c.006 0 .003 0 0 0zm16.754 2.161c-.505-1.215-1.53-2.528-2.333-2.943.654 1.283 1.033 2.57 1.177 3.53l.002.02c-1.314-3.278-3.544-4.6-5.366-7.477-.091-.147-.184-.292-.273-.446a3.545 3.545 0 01-.13-.24 2.118 2.118 0 01-.172-.46.03.03 0 00-.027-.03.038.038 0 00-.021 0l-.006.001a.037.037 0 00-.01.005L15.624 0c-2.585 1.515-3.657 4.168-3.932 5.856a6.197 6.197 0 00-2.305.587.297.297 0 00-.147.37c.057.162.24.24.396.17a5.622 5.622 0 012.008-.523l.067-.005a5.847 5.847 0 011.957.222l.095.03a5.816 5.816 0 01.616.228c.08.036.16.073.238.112l.107.055a5.835 5.835 0 01.368.211 5.953 5.953 0 012.034 2.104c-.62-.437-1.733-.868-2.803-.681 4.183 2.09 3.06 9.292-2.737 9.02a5.164 5.164 0 01-1.513-.292 4.42 4.42 0 01-.538-.232c-1.42-.735-2.593-2.121-2.74-3.806 0 0 .537-2 3.845-2 .357 0 1.38-.998 1.398-1.287-.005-.095-2.029-.9-2.817-1.677-.422-.416-.622-.616-.8-.767a3.47 3.47 0 00-.301-.227 5.388 5.388 0 01-.032-2.842c-1.195.544-2.124 1.403-2.8 2.163h-.006c-.46-.584-.428-2.51-.402-2.913-.006-.025-.343.176-.389.206-.406.29-.787.616-1.136.974-.397.403-.76.839-1.085 1.303a9.816 9.816 0 00-1.562 3.52c-.003.013-.11.487-.19 1.073-.013.09-.026.181-.037.272a7.8 7.8 0 00-.069.667l-.002.034-.023.387-.001.06C.386 18.795 5.593 24 12.016 24c5.752 0 10.527-4.176 11.463-9.661.02-.149.035-.298.052-.448.232-1.994-.025-4.09-.753-5.844z">
                    </path>
                </svg>
                <span class="ml-3">Add to Firefox</span>
            </a>
            <div class="relative flex flex-1 flex-col items-stretch sm:flex-none" data-headlessui-state="">
                <button class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-none ring-slate-200 text-slate-700 hover:text-slate-900 hover:ring-slate-300 active:bg-slate-100 active:text-slate-600 focus-visible:outline-blue-600 focus-visible:ring-slate-300 animate-fade-in-right" id="headlessui-menu-button-:r4:" aria-haspopup="true" aria-expanded="false" data-headlessui-state="" type="button">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" aria-hidden="true" class="h-3 w-3 flex-none fill-current text-blue-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701"></path></svg>
                    <span class="ml-3">Download for Mac</span>
                </button>
            </div>
        </div> --}}

    </div>














    <!-- forked from: https://codepen.io/cuonoj/pen/JjPmMaB -->



<div class="my-12">
    <section class="relative flex flex-col h-[500px] items-center justify-center text-center text-white ">
        <div class="video-docker absolute top-0 left-0 right-0 w-3/4 h-[500px] m-auto overflow-hidden rounded-lg shadow-md">
            <video class="min-w-full min-h-full absolute object-cover"
                src="{{ asset('data/5.mp4') }}"
                type="video/mp4" autoplay muted loop></video>
        </div>
        {{-- <div class="video-content space-y-2 z-10">
            <h1 class="font-light text-6xl">full Hero Video</h1>
            <h3 class="font-light text-3xl">with TailwindCSS</h3>
        </div> --}}
    </section>

</div>




  <section class="pb-24 relative xl:mr-0 lg:mr-5 mr-0">

    <div class="container max-w-xl p-6 mt-12 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
        {{-- <div>
          <h2 class="text-3xl font-bold text-center sm:text-5xl">New Features</h2>
          <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">Explore the latest features that enhance your learning experience and make it even more exciting.</p>
        </div> --}}
{{--
        <x-heading>
            {{ __('whyus.our-services') }}
        </x-heading> --}}

    </div>
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center xl:gap-12 gap-10 grid grid-cols-1">

            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">


                <div class="w-full flex-col justify-center items-start gap-8 flex mt-12">



                    {{-- <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                        <h6 class="text-gray-400 text-base font-normal leading-relaxed">About Us</h6>
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                            <h2
                                class="text-indigo-700 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                The Tale of Our Achievement Story</h2>
                            <p
                                class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                Our achievement story is a testament to teamwork and perseverance. Together, we've
                                overcome challenges, celebrated victories, and created a narrative of progress and
                                success.</p>
                        </div>
                    </div> --}}
                    <div class="w-full flex-col justify-center items-start gap-6 flex">
                        <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1 my-5">
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-center items-center gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold leading-9">
                                    {{ __('homepage.homepage-feat-1') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.experience') }}
                                </p> --}}
                            </div>
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-md font-bold leading-9">
                                    {{ __('homepage.homepage-feat-1-desc') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.complete-the-design') }}
                                </p> --}}
                            </div>
                        </div>
                        <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1 my-5">
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-center items-center gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold leading-9">
                                    {{ __('homepage.homepage-feat-2') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.experience') }}
                                </p> --}}
                            </div>
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-md font-bold leading-9">
                                    {{ __('homepage.homepage-feat-2-desc') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.complete-the-design') }}
                                </p> --}}
                            </div>
                        </div>
                        <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1 my-5">
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-center items-center gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold leading-9">
                                    {{ __('homepage.homepage-feat-3') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.experience') }}
                                </p> --}}
                            </div>
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-md font-bold leading-9">
                                    {{ __('homepage.homepage-feat-3-desc') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.complete-the-design') }}
                                </p> --}}
                            </div>
                        </div>
                        <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1 my-5">
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-center items-center gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold leading-9">
                                    {{ __('homepage.homepage-feat-4') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.experience') }}
                                </p> --}}
                            </div>
                            <div
                                class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-md font-bold leading-9">
                                    {{ __('homepage.homepage-feat-4-desc') }}
                                </h4>
                                {{-- <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.complete-the-design') }}
                                </p> --}}
                            </div>
                        </div>



                    </div>



                    <div class="w-full flex-col justify-center items-start gap-6 flex">
                        <div class="w-full justify-start items-center gap-8 grid grid-cols-1 my-5">

                            <div
                            class="w-full h-full p-10 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-center items-center gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-lg font-bold leading-9">
                                    {{ __('homepage.let-urban') }}
                                </h4>
                                <p class="text-gray-500 text-base font-normal leading-relaxed">
                                    {{ __('whyus.experience') }}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

{{--
                <button
                    class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out justify-center items-center flex">
                    <span
                        class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">
                        {{ __('whyus.read-more') }}
                    </span>
                    <svg class="group-hover:translate-x-0.5 transition-all duration-700 ease-in-out size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#4F46E5" stroke-width="1.6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>

                </button> --}}


            </div>
            {{-- <div class="w-full lg:justify-center justify-center items-start flex">
                <div
                    class="w-full h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                    <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                        src="{{ asset('images/slider/4.webp') }}" alt="about Us image" />
                </div>
            </div> --}}
        </div>
    </div>
</section>







<div class="bg-app-orange-2 text-white py-20 mt-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-8 lg:flex-row items-center">
            <div class="lg:w-1/2 text-center">
                <h1 class="text-4xl font-bold leading-tight mb-4 rtl:text-right">
                    {{ __('whyus.welcome') }}
                </h1>
                <p class="text-md text-gray-300 py-4 mb-8 rtl:text-right">
                    {{ __('whyus.company-specialized') }}
                </p>
                <a href="{{ route('contact.us') }}"
                    class="bg-white text-gray-900 py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('whyus.start-now') }}
                </a>
            </div>
            <div class="lg:w-1/2 lg:mr-12">
                <img src="{{ asset('images/slider/5.webp') }}" alt="Tailwind CSS" class="rounded-lg shadow-lg hover:shadow-xl transition duration-200">
            </div>
        </div>
    </div>
</div>



</x-layout>
