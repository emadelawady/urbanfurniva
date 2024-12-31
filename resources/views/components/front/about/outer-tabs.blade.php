
<div x-data="{ activeTab: 1 }" class="py-20 bg-white">

    <!-- Buttons -->
    <div class="flex justify-center">
        <div
            role="tablist"
            class="max-[480px]:max-w-[180px] container max-w-6xl mx-auto inline-flex flex-wrap justify-center bg-secondary lg:rounded-[20px] mb-8 min-[480px]:mb-12 border"
            @keydown.right.prevent.stop="$focus.wrap().next()"
            @keydown.left.prevent.stop="$focus.wrap().prev()"
            @keydown.home.prevent.stop="$focus.first()"
            @keydown.end.prevent.stop="$focus.last()"
        >
            <!-- Button #1 -->
            <button
                id="tab-1"
                class="flex-1 text-lg font-medium h-12 px-4 lg:rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                :class="activeTab === 1 ? 'bg-app-orange-2 text-secondary' : 'text-slate-600 hover:text-slate-900'"
                :tabindex="activeTab === 1 ? 0 : -1"
                :aria-selected="activeTab === 1"
                aria-controls="tabpanel-1"
                @click="activeTab = 1"
                @focus="activeTab = 1"
            >
                {{ __('outer-tabs.ksa') }}
            </button>
            <!-- Button #2 -->
            <button
                id="tab-2"
                class="flex-1 text-lg font-medium h-12 px-4 lg:rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                :class="activeTab === 2 ? 'bg-app-orange-2 text-secondary' : 'text-slate-600 hover:text-slate-900'"
                :tabindex="activeTab === 2 ? 0 : -1"
                :aria-selected="activeTab === 2"
                aria-controls="tabpanel-2"
                @click="activeTab = 2"
                @focus="activeTab = 2"
            >
                {{ __('outer-tabs.usa') }}
            </button>
        </div>
    </div>

    <!-- Tab panels -->
    <div class=" container max-w-6xl mx-auto">

        {{-- max-w-[640px]  => for container mx-w-6xl --}}
        <div class="relative flex flex-col">

            <!-- Panel #1 -->
            <article
                id="tabpanel-1"
                class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
                role="tabpanel"
                tabindex="0"
                aria-labelledby="tab-1"
                x-show="activeTab === 1"
                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                x-transition:enter-start="opacity-0 -translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-12"
            >

                <x-front.about.ksa-tab />

            </article>

            <!-- Panel #2 -->
            <article
            id="tabpanel-1"
            class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
            role="tabpanel"
            tabindex="0"
            aria-labelledby="tab-2"
            x-show="activeTab === 2"
            x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
            x-transition:enter-start="opacity-0 -translate-y-8"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-12"
        >
            <x-front.about.usa-tab />
        </article>
        </div>
    </div>

</div>
