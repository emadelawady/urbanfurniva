{{-- <div class="flex flex-wrap items-center justify-center z-40" x-data="
    {
    switcher:
        {selected: 0,
        countries: [
            {
                label: 'العربية',
                lang: 'ar',
                flag: 'sa',
                'svg': 'flag-sa',
            },
            {
                label: 'English',
                lang: 'en',
                flag: 'us',
                'svg': 'flag-us',
            },
        ],
        menuToggle: false
        }
    }">


    <div class="relative" @click.away="switcher.menuToggle=false">


        <button class="flex items-center justify-center px-2 shadow-sm rounded-md text-app-orange focus:outline-none" @click.prevent="switcher.menuToggle=!switcher.menuToggle">

            <span x-text="switcher.countries[switcher.selected].label"></span>

            <span :class="switcher.countries[switcher.selected].svg" class="size-8 mr-2"></span>

        </button>

        <div class="bg-white text-gray-700 shadow-md rounded text-sm absolute mt-12 top-0 left-0 min-w-full w-48 z-30" x-show="switcher.menuToggle" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
            <span class="absolute top-0 right-0 w-3 h-3 bg-white transform rotate-45 -mt-1 mr-3"></span>
            <div class="bg-white overflow-auto rounded w-full relative z-10">
                <ul class="list-reset">
                    <template x-for="(item, index) in switcher.countries">
                        <li>
                            <a href="" class="px-4 py-2 flex hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100" @click.prevent="switcher.menuToggle=false;switcher.selected=index;">


                                <template x-if="item.flag=='us'">
                                    <span class="flag-us size-6 inline-block ml-2"></span>
                                </template>
                                <template x-if="item.flag=='sa'">
                                    <span class="flag-sa size-6 inline-block ml-2"></span>
                                </template>



                                <span class="inline-block" x-text="item.label"></span>
                                <template x-if="index==switcher.selected">
                                    <span class="ml-auto">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mx-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>


                                    </span>
                                </template>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>

    </div>
</div>
 --}}


{{-- @dd(Config::get('app.locale')) --}}

@if(Config::get('app.locale') == 'en')
<a href="{{ route('locale', 'ar') }}" class="px-2 py-1 rounded-lg border">
    <div class="flex items-center justify-center flex-row-reverse gap-1 hover:text-primary">
        <span class="text-sm font-extrabold ml-1">العربية</span>
        <span class="flag-sa size-6"></span>
    </div>
</a>

@endif


@if(Config::get('app.locale') == 'ar')
<a href="{{ route('locale', 'en') }}" class="py-1 px-2 rounded-lg border">
    <div class="flex items-center justify-center gap-1 hover:text-primary">
        <span class="flag-us size-6 ml-1"></span>
        <span class="text-xs font-extrabold">English</span>

    </div>
</a>


@endif
