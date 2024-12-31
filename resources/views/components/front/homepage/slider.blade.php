<div x-data="{
    // Sets the time between each slides in milliseconds
    autoplayIntervalTime: 3000,
    slides: [
        {
            imgSrc: '{{ asset('images/slider/1.webp') }}',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
            title: '{{ __('homepage.dream') }}',
            description: '{{ __('homepage.everything') }}',
        },
        {
            imgSrc: '{{ asset('images/slider/2.webp') }}',
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
            title: '{{ __('homepage.kitchen-as') }}',
            description: '{{ __('homepage.technicians') }}',
        },
        {
            imgSrc: '{{ asset('images/slider/3.webp') }}',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            title: '{{ __('homepage.kitchen-is') }}',
            description: '{{ __('homepage.highest-quality') }}',
        },
        {
            imgSrc: '{{ asset('images/slider/4.webp') }}',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            title: '{{ __('homepage.competitive') }}',
            description: '{{ __('homepage.comprehensive') }}',
        },
        {
            imgSrc: '{{ asset('images/slider/5.webp') }}',
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
            title: '{{ __('homepage.contact-us') }}',
            description: '{{ __('homepage.professionalism') }}',
        },
    ],
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            // If it's the first slide, go to the last slide
            this.currentSlideIndex = this.slides.length
        }
    },
    next() {
        if (this.currentSlideIndex < this.slides.length) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            // If it's the last slide, go to the first slide
            this.currentSlideIndex = 1
        }
    },
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },
}" x-init="autoplay" class="relative w-full overflow-hidden rounded-lg shadow-lg">



    <!-- previous button -->
    <button type="button" class="absolute left-5 top-1/2 z-40 flex rounded-full -translate-y-1/2 items-center justify-center bg-red-50/40 p-2 text-slate-600 transition hover:bg-red-50/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:outline-offset-0 dark:bg-black/40 dark:text-violet-100 dark:hover:bg-black/60 dark:focus-visible:outline-lime-400" aria-label="previous slide" x-on:click="previous()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- next button -->
    <button type="button" class="absolute right-5 top-1/2 z-40 flex rounded-full -translate-y-1/2 items-center justify-center bg-red-50/40 p-2 text-slate-600 transition hover:bg-red-50/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-400 active:outline-offset-0 dark:bg-black/40 dark:text-violet-100 dark:hover:bg-black/60 dark:focus-visible:outline-lime-400" aria-label="next slide" x-on:click="next()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="home_slider relative min-h-[60svh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0 home_slider_slide" x-transition.opacity.duration.1000ms>

                <!-- Title and description -->
                <div class="lg:px-32 lg:py-14 absolute inset-0 z-40 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent px-16 py-12 text-center">
                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                    <p class="lg:w-1/2 w-full text-pretty text-sm text-neutral-300" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                </div>

                <img class="home_slider_slide_img absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>

    <!-- Pause/Play Button -->
    <button type="button" class="absolute bottom-5 right-5 z-20 rounded-full text-neutral-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
        </svg>
        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
        </svg>
    </button>

    <!-- indicators -->
    <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-300' : 'bg-neutral-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>







<style>

    .home_slider .home_slider_slide:after, .home_slider .home_slider_slide .home_slider_slide_img:after {
        width: 100%;
        height: 100%;
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        pointer-events: none;
        z-index: 39;
        background: rgba(0,0,0,.3);
    }


      </style>
