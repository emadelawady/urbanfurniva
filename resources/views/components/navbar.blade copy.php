<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="flex items-center justify-between md:justify-center bg-gray-800 text-white px-6 py-2 shadow-lg z-40" aria-label="penguin ui menu">
	<!-- Brand Logo -->
	{{-- <a href="#" class="text-2xl font-bold text-purple-800 dark:text-white">
		<span>Peng<span class="text-orange-400 dark:text-lime-400">ui</span>n</span>
		<img src="{{ asset('images/land-logo-2.png') }}" alt="brand logo" class="w-10" />
	</a> --}}
	<!-- Desktop Menu -->
	<ul class="hidden items-center gap-10 sm:flex">
		<li class="py-2">
            <a href="{{ route('home.page') }}" class="text-lg tracking-wide {{ Route::is('home.page') ? 'font-bold text-white' : 'text-appColor'; }} hover:text-white dark:text-lime-400 dark:hover:text-lime-400" aria-current="page">
                {{ __('nav.home') }}
            </a>
        </li>



        <li class="py-2 {{ Route::is('about.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('about.us') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('nav.about-us') }}
            </a>
        </li>


{{-- @dd(\App\RouteNames::get('kitchen')) --}}


        <li class="py-2">
            <a
            href="javascript:avoid(0)"
            class="{{ Route::is(getAllRouteSubNames('kitchens')) ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }} dark:text-violet-100 dark:hover:text-lime-400">

                <div x-data="{ isOpen: false, openedWithKeyboard: false, leaveTimeout: null }" @mouseleave.prevent="leaveTimeout = setTimeout(() => { isOpen = false }, 100)" @mouseenter="leaveTimeout ? clearTimeout(leaveTimeout) : true" @keydown.esc.prevent="isOpen = false, openedWithKeyboard = false" @click.outside="isOpen = false, openedWithKeyboard = false" class="relative">
                    <!-- Toggle Button -->
                    <button type="button" @mouseover="isOpen = true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded py-2 dark:bg-gray-900 dark:focus-visible:outline-purple-600" :class="isOpen || openedWithKeyboard ? 'text-white dark:text-white' : 'text-slate-600 dark:text-violet-100'" :aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">
                        {{ __('kitchens.the-kitchens') }}
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 totate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 right-0 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded bg-white py-1.5 dark:bg-gray-900 text-center z-40 border" role="menu">

                        <a href="{{ route('kitchens') }}" class="{{ Route::is('kitchens*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('nav.all-kitchen') }}
                        </a>


                        <a href="{{ route('range.hood') }}" class="{{ Route::is('range.hood*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.range-hood') }}
                        </a>
                        <a href="{{ route('burner.gas') }}" class="{{ Route::is('burner.gas*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.burner-gas') }}
                        </a>
                        <a href="{{ route('ovens') }}" class="{{ Route::is('ovens*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.ovens') }}
                        </a>
                        <a href="{{ route('trolls') }}" class="{{ Route::is('trolls*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.trolls') }}
                        </a>
                        <a href="{{ route('doorHandle') }}" class="{{ Route::is('doorHandle*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.door-handle') }}
                        </a>
                        <a href="{{ route('sinks') }}" class="{{ Route::is('sinks*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">
                            {{ __('messages.sinks') }}
                        </a>
                    </div>
                </div>


            </a>
        </li>


        <li class="py-2">
            <a href="javascript:avoid(0)" class="{{ Route::is(getAllRouteSubNames('furniture')) ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }} dark:text-violet-100 dark:hover:text-lime-400">

                <div x-data="{ isOpen: false, openedWithKeyboard: false, leaveTimeout: null }" @mouseleave.prevent="leaveTimeout = setTimeout(() => { isOpen = false }, 100)" @mouseenter="leaveTimeout ? clearTimeout(leaveTimeout) : true" @keydown.esc.prevent="isOpen = false, openedWithKeyboard = false" @click.outside="isOpen = false, openedWithKeyboard = false" class="relative">
                    <!-- Toggle Button -->
                    <button type="button" @mouseover="isOpen = true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded py-2 dark:bg-gray-900 dark:focus-visible:outline-purple-600" :class="isOpen || openedWithKeyboard ? 'text-white dark:text-white' : 'text-slate-600 dark:text-violet-100'" :aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">
                        {{ __('nav.furniture') }}
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 totate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 right-0 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded bg-white py-1.5 dark:bg-gray-900 text-center z-40 border" role="menu">

                        <a href="{{ route('furniture') }}" class="{{ Route::is('furniture*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('nav.all-furniture') }}</a>


                        <a href="{{ route('furniture.livingroom') }}" class="{{ Route::is('furniture.livingroom*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.living-room') }}</a>


                        <a href="{{ route('furniture.bedroom') }}" class="{{ Route::is('furniture.bedroom*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.bedroom') }}</a>



                        <a href="{{ route('furniture.diningroom') }}" class="{{ Route::is('furniture.diningroom*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.diningroom') }}</a>



                        <a href="{{ route('furniture.officefurniture') }}" class="{{ Route::is('furniture.officefurniture*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.officefurniture') }}</a>


                        <a href="{{ route('furniture.outdoorfurniture') }}" class="{{ Route::is('furniture.outdoorfurniture*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.outdoorfurniture') }}</a>



                        <a href="{{ route('furniture.entrywayfurniture') }}" class="{{ Route::is('furniture.entrywayfurniture*') ? 'font-bold tracking-wider text-lg text-app-orange-2' : 'hover:text-app-orange-2'; }} px-4 py-2 text-app-orange text-sm dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">{{ __('messages.entrywayfurniture') }}</a>

                    </div>
                </div>


            </a>
        </li>






        <li class="py-2 {{ Route::is('our.works') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('our.works') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('nav.our-works') }}
            </a>
        </li>


		<li class="py-2 {{ Route::is('why.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('why.us') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('nav.why-us') }}
            </a>
        </li>



        <li class="py-2 {{ Route::is('contact.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('contact.us') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('nav.contact-us') }}
            </a>
        </li>


		<!-- CTA Button -->
		{{-- <li><a href="#" class="rounded bg-orange-400 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:opacity-100 active:outline-offset-0 dark:bg-lime-400 dark:text-black dark:focus-visible:outline-lime-400">Sign Up</a></li> --}}
	</ul>
	<!-- Mobile Menu Button -->
	<button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 left-6 z-20 bg-black rounded-full p-1' : null" type="button" class="flex text-slate-600 dark:text-violet-100 sm:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
		<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
		</svg>
		<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
		</svg>
	</button>
	<!-- Mobile Menu -->
	<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 right-40 min-h-screen top-0 z-10 flex flex-col divide-y divide-gray-200 rounded-b bg-app-orange-2 px-6 pb-6 pt-20 dark:divide-slate-700 dark:bg-gray-900 sm:hidden">
		<li class="py-4"><a href="#" class="w-full text-lg font-bold text-orange-400 focus:underline dark:text-lime-400" aria-current="page">Products</a></li>
		<li class="py-4"><a href="#" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">Pricing</a></li>


        <li class="py-4"><a href="#" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">Blog</a></li>



        <li class="py-4">
            <a href="#" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">



                <div x-data="{ isOpened: false, openedWithKeyboard: false }" @keydown.esc.window="isOpened = false, openedWithKeyboard = false" class="relative">
                    <!-- Toggle Button -->
                    <button type="button" @click="isOpened = ! isOpened" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded bg-gray-100 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 dark:bg-gray-900 dark:focus-visible:outline-purple-600" :class="isOpened || openedWithKeyboard ? 'text-purple-800 dark:text-white' : 'text-slate-600 dark:text-violet-100'" :aria-expanded="isOpened || openedWithKeyboard" aria-haspopup="true">
                        Actions Menu
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="isOpened || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpened = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 flex w-full min-w-[12rem] flex-col divide-y divide-gray-200 overflow-hidden rounded bg-gray-100 dark:divide-slate-700 dark:bg-gray-900" role="menu">
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Dashboard</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Messages</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Favorites</a>
                        </div>
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Profile</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Settings</a>
                        </div>
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Sign Out</a>
                        </div>
                    </div>
                </div>


            </a>
        </li>
        <li class="py-4">
            <a href="#" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">



                <div x-data="{ isOpened: false, openedWithKeyboard: false }" @keydown.esc.window="isOpened = false, openedWithKeyboard = false" class="relative">
                    <!-- Toggle Button -->
                    <button type="button" @click="isOpened = ! isOpened" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded bg-gray-100 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 dark:bg-gray-900 dark:focus-visible:outline-purple-600" :class="isOpened || openedWithKeyboard ? 'text-purple-800 dark:text-white' : 'text-slate-600 dark:text-violet-100'" :aria-expanded="isOpened || openedWithKeyboard" aria-haspopup="true">
                        Actions Menu
                        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 rotate-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-cloak x-show="isOpened || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpened = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 flex w-full min-w-[12rem] flex-col divide-y divide-gray-200 overflow-hidden rounded bg-gray-100 dark:divide-slate-700 dark:bg-gray-900" role="menu">
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Dashboard</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Messages</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Favorites</a>
                        </div>
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Profile</a>
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Settings</a>
                        </div>
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="bg-gray-100 px-4 py-2 text-sm text-slate-600 hover:bg-gray-900/5 hover:text-purple-800 focus-visible:bg-gray-900/10 focus-visible:text-purple-800 focus-visible:outline-none dark:bg-gray-900 dark:text-violet-100 dark:hover:bg-gray-100/5 dark:hover:text-white dark:focus-visible:bg-gray-100/10 dark:focus-visible:text-white" role="menuitem">Sign Out</a>
                        </div>
                    </div>
                </div>


            </a>
        </li>
        <li class="py-4">
            <a href="#" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">




            </a>
        </li>




        <li class="bg-slate-50 rounded-md">
            <details class="group">

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

                    <ul class="flex flex-col gap-4 pl-2 mt-4">

                        <li class="flex gap-2">
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

                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('range.hood') }}">

                                {{ __('messages.range-hood') }}
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


        <li class="bg-slate-50 rounded-md">
            <details class="group">

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

                    <ul class="flex flex-col gap-4 pl-2 mt-4">

                        <li class="flex gap-2">
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

                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('range.hood') }}">

                                {{ __('messages.range-hood') }}
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


        <li class="bg-slate-50 rounded-md">
            <details class="group">

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

                    <ul class="flex flex-col gap-4 pl-2 mt-4">

                        <li class="flex gap-2">
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

                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('range.hood') }}">

                                {{ __('messages.range-hood') }}
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

        <li class="bg-slate-50 rounded-md">
            <details class="group">

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

                    <ul class="flex flex-col gap-4 pl-2 mt-4">

                        <li class="flex gap-2">
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

                        <li class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                              </svg>



                            <a href="{{ route('range.hood') }}">

                                {{ __('messages.range-hood') }}
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


		<!-- CTA Button -->
		{{-- <li class="mt-4 w-full border-none"><a href="#" class="rounded bg-orange-400 px-4 py-2 block text-center font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:opacity-100 active:outline-offset-0 dark:bg-lime-400 dark:text-black dark:focus-visible:outline-lime-400">Sign Up</a></li> --}}
	</ul>
</nav>





