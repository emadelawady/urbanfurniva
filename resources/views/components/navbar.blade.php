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


        <li class="py-2 {{ Route::is('kitchens*') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('kitchens') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('kitchens.the-kitchens') }}
            </a>
        </li>
        <li class="py-2 {{ Route::is('furniture*') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('furniture') }}" class="dark:text-violet-100 dark:hover:text-lime-400">
                {{ __('nav.furniture') }}
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


		{{-- <!-- CTA Button -->
		<li><a href="#" class="rounded bg-orange-400 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:opacity-100 active:outline-offset-0 dark:bg-lime-400 dark:text-black dark:focus-visible:outline-lime-400">Sign Up</a></li> --}}
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
	<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 right-0 left-0 min-h-screen top-0 z-10 flex flex-col divide-y divide-gray-200 rounded-b bg-app-orange-2 px-6 pb-6 pt-20 dark:divide-slate-700 dark:bg-gray-900 sm:hidden">
		<li class="py-4">
            <a href="{{ route('home.page') }}" class="w-full text-lg font-bold text-orange-400 focus:underline dark:text-lime-400 {{ Route::is('home.page') ? 'font-bold text-white' : 'text-appColor'; }}" aria-current="page">
                {{ __('nav.home') }}
            </a>
        </li>
		<li class="py-4 {{ Route::is('about.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('about.us') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('nav.about-us') }}
            </a>
        </li>


        <li class="py-4 {{ Route::is('kitchens') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('kitchens') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('kitchens.the-kitchens') }}
            </a>
        </li>


        <li class="py-4 {{ Route::is('furniture') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('furniture') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('nav.furniture') }}
            </a>
        </li>


        <li class="py-4 {{ Route::is('our.works') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('our.works') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('nav.our-works') }}
            </a>
        </li>

        <li class="py-4 {{ Route::is('why.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('why.us') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('nav.why-us') }}
            </a>
        </li>

        <li class="py-4 {{ Route::is('contact.us') ? 'font-bold tracking-wider text-lg text-white' : 'text-appColor'; }}">
            <a href="{{ route('contact.us') }}" class="w-full text-lg font-medium text-slate-600 focus:underline dark:text-violet-100">
                {{ __('nav.contact-us') }}
            </a>
        </li>




		{{--
        <!-- CTA Button -->
		<li class="mt-4 w-full border-none">
            <a href="#" class="rounded bg-orange-400 px-4 py-2 block text-center font-medium tracking-wide text-slate-100 hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:opacity-100 active:outline-offset-0 dark:bg-lime-400 dark:text-black dark:focus-visible:outline-lime-400">
                {{ __('nav.contact-us') }}
            </a>
        </li>
        --}}


	</ul>
</nav>





