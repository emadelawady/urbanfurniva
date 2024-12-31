<!-- drawer init and toggle -->
<div class="text-center border-transparent b_animation">

    <button class="flex font-extrabold text-sm tracking-wider rounded-t-md py-1 px-2 dark:bg-blue-600 dark:hover:bg-blue-700" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 ml-1 ltr:mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>

        {{ __('messages.categories') }}


    </button>


    {{-- <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
    الفئات
    </button> --}}

</div>

<!-- drawer component -->
<div id="drawer-right-example" class="fixed top-0 right-0 z-50 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">


    <div class="">

        <h5 id="drawer-right-label" class="inline-flex items-center text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>{{ __('messages.categories') }}
        </h5>
            <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">{{ __('sidenav.close-menu') }}</span>
            </button>
    </div>



    {{-- <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our <a href="#" class="text-blue-600 underline font-medium dark:text-blue-500 hover:no-underline">limited-time sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1 design job board.</p>
    <div class="grid grid-cols-2 gap-4">
    <a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn more</a>
    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get access <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
</svg></a>
    </div> --}}








    <ul class="flex flex-col gap-2 max-w-[280px] mx-auto mt-12">

        <li class="">
            <details class="group" open>

                <summary
                    class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer bg-white">

                    <span class="flex gap-2">


                        {{-- <img class="w-6 h-6 rounded-lg"
                            src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                            alt=""> --}}

                        <span class="">
                            {{ __('sidenav.kitchens') }}
                        </span>
                    </span>
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </summary>

                <article class="px-4 pb-4">

                    <ul class="flex flex-col gap-4 pl-2 mt-2">

                        <li class="flex gap-2 p-3 {{ Route::is('kitchens') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                </path>
                            </svg>


                            <a href="{{ route("kitchens") }}">

                                {{ __('sidenav.all-kitchens') }}
                            </a>
                        </li>

                        <li class="flex gap-2 p-3 {{ Route::is('range.hood') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('range.hood') }}">

                                {{ __('messages.range-hood') }}
                            </a>
                        </li>
                        <li class="flex gap-2 p-3 {{ Route::is('burner.gas') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('burner.gas') }}">

                                {{ __('messages.burner-gas') }}
                            </a>
                        </li>
                        <li class="flex gap-2 p-3 {{ Route::is('ovens') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('ovens') }}">

                                {{ __('messages.ovens') }}
                            </a>
                        </li>
                        <li class="flex gap-2 p-3 {{ Route::is('trolls') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('trolls') }}">

                                {{ __('messages.trolls') }}
                            </a>
                        </li>
                        <li class="flex gap-2 p-3 {{ Route::is('doorHandle') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('doorHandle') }}">

                                {{ __('messages.door-handle') }}
                            </a>
                        </li>
                        <li class="flex gap-2 p-3 {{ Route::is('sinks') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('sinks') }}">

                                {{ __('messages.sinks') }}
                            </a>
                        </li>


                        {{-- <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                </path>
                            </svg>

                            <a href="http://127.0.0.1:8000/user/study-lists">
                                المسكات
                            </a>
                        </li> --}}









{{--
                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                                </path>
                            </svg>


                            <a href="http://127.0.0.1:8000/user/contribution">
                                Your contribution
                            </a>
                        </li>


                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>


                            <a href="http://127.0.0.1:8000/user/settings">
                                Settings
                            </a>
                        </li> --}}


                        {{-- <form action="http://127.0.0.1:8000/auth/logout" method="POST">
                            <input type="hidden" name="_token" value="ymEkCLBFpgkdaSbidUArRsdHbER5DkT6ByS3eJYb">
                            <button type="submit" class="text-red-500 text-sm px-2 py-1 hover:bg-red-200 rounded-md">
                                Log Out
                            </button>
                        </form> --}}

                    </ul>

                </article>

            </details>
        </li>
        <li class="">
            <details class="group" open>

                <summary
                    class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer bg-white">

                    <span class="flex gap-2">


                        {{-- <img class="w-6 h-6 rounded-lg"
                            src="https://lh3.googleusercontent.com/a/AGNmyxbSlMgTRzE3_SMIxpDAhpNad-_CN5_tmph1NQ1KhA=s96-c"
                            alt=""> --}}

                        <span>

                            {{ __('sidenav.furniture') }}

                        </span>
                    </span>
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </summary>

                <article class="px-4 pb-4">

                    <ul class="flex flex-col gap-4 pl-2 mt-4">

                        <li class="flex gap-2 p-3 {{ Route::is('furniture') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                </path>
                            </svg>


                            <a href="{{ route('furniture') }}">
                                {{ __('sidenav.all-furniture') }}
                            </a>
                        </li>



                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.livingroom*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>


                                <a href="{{ route('furniture.livingroom') }}" class="mx-2">
                                    {{ __('messages.living-room') }}
                                </a>


                            </div>

                            <article class="w-full px-4 pb-4">

                                <ul class="flex flex-col gap-4 mt-4 px-4">


                                    <li class="flex gap-2 p-3 text-xs {{ Route::is('furniture.livingroom.sofa*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                        </svg>


                                        <a href="{{ route('furniture.livingroom.sofa') }}">
                                            {{ __('messages.sofas') }}
                                        </a>
                                    </li>
                                    <li class="flex gap-2 p-3 text-xs {{ Route::is('furniture.livingroom.chair*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                        </svg>


                                        <a href="{{ route('furniture.livingroom.chair') }}">
                                            {{ __('messages.chairs') }}
                                        </a>
                                    </li>
                                    <li class="flex gap-2 p-3 text-xs {{ Route::is('furniture.livingroom.table*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                        </svg>


                                        <a href="{{ route('furniture.livingroom.table') }}">
                                            {{ __('messages.tables') }}
                                        </a>
                                    </li>
                                    <li class="flex gap-2 p-3 text-xs {{ Route::is('furniture.livingroom.cupboard*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                        </svg>


                                        <a href="{{ route('furniture.livingroom.cupboard') }}">
                                            {{ __('messages.cupboards') }}
                                        </a>
                                    </li>

                                </ul>

                            </article>




                        </li>


                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.bedroom*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>


                                <a href="{{ route('furniture.bedroom') }}" class="mx-2">
                                    {{ __('messages.bedroom') }}
                                </a>


                            </div>

                        </li>



                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.diningroom*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>


                                <a href="{{ route('furniture.diningroom') }}" class="mx-2">
                                    {{ __('messages.diningroom') }}
                                </a>


                            </div>

                        </li>




                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.officefurniture*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 0 1 7.5 5.25h9a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-9Z" />
                                </svg>


                                <a href="{{ route('furniture.officefurniture') }}" class="mx-2">
                                    {{ __('messages.officefurniture') }}
                                </a>


                            </div>

                        </li>




                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.outdoorfurniture*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 0 1 7.5 5.25h9a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-9Z" />
                                </svg>


                                <a href="{{ route('furniture.outdoorfurniture') }}" class="mx-2">
                                    {{ __('messages.outdoorfurniture') }}
                                </a>


                            </div>

                        </li>




                        <li class="w-full flex flex-col gap-2">


                            <div class="w-full flex p-3 {{ Route::is('furniture.entrywayfurniture*') ? 'font-bold bg-slate-100 text-app-orange-2 rounded-md' : ''; }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 0 1 7.5 5.25h9a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-9Z" />
                                </svg>



                                <a href="{{ route('furniture.entrywayfurniture') }}" class="mx-2">
                                    {{ __('messages.entrywayfurniture') }}
                                </a>


                            </div>

                        </li>


                        {{-- <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                </path>
                            </svg>

                            <a href="http://127.0.0.1:8000/user/study-lists">
                                الركنيات
                            </a>
                        </li> --}}


                    </ul>

                </article>

            </details>
        </li>

        {{-- <li>
            <details class="group">

                <summary
                    class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                    <span class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <span>
                            الأثاث
                        </span>
                    </span>
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </summary>

                <article class="px-4 pb-4">
                    <ul class="flex flex-col gap-1 pl-2">
                        <li><a href="">Document title</a></li>
                        <li><a href="">Document title</a></li>
                        <li><a href="">Document title</a></li>
                    </ul>
                </article>

            </details>
        </li>

        <li>
            <details class="group">

                <summary
                    class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

                    <span class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <span>
                            Popular courses
                        </span>
                    </span>
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>


                </summary>

                <article class="px-4 pb-4">
                    <ul class="flex flex-col gap-1 pl-2">
                        <li><a href="">Course title</a></li>
                        <li><a href="">Course title</a></li>
                        <li><a href="">Course title</a></li>
                    </ul>
                </article>

            </details>
        </li> --}}

    </ul>





</div>
