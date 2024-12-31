<x-layout>


    <x-slot:title>
        {!! config('app.name') !!} - {{ __('our-works.our-works') }}
    </x-slot>




<!-- Custom Style -->
<style>
    .lightbox {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        overflow:hidden;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .lightbox-image {
        display: block;
        margin: auto;
        max-width: 100%;
        max-height: 100%;
    }
    .close {
        color: #fff;
        font-size: 3em;
        position: absolute;
        top: 20px;
        right: 30px;
        cursor: pointer;
    }
    .gallery {
        width: 90vw;
        max-width: 1200px;
        margin: 0 auto;
        grid-template-rows: 1fr;
        grid-column-gap: 30px;
        grid-row-gap: 30px;

    }
    .gallery img {
        max-width: 100%;
        cursor: pointer;
    }
    .gallery img:hover {
        max-width: 100%;
        cursor: pointer;
    }
    </style>
        <section class="py-24 ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">


            <div class="grid gap-2.5 lg:pb-16 pb-10">
                <h2 class="w-full text-center text-gray-900 text-4xl font-bold leading-normal">{{ __('our-works.our-works') }}</h2>
                <div class="w-full text-center text-gray-600 text-lg font-normal leading-8">
                    {{ __('our-works.browse') }}
                </div>
            </div>
                <div class="gallery">
                    <div class="flex flex-col mb-10">
                    <div class="grid md:grid-cols-12 gap-8 lg:mb-11 mb-7">
                        <div class="md:col-span-4 md:h-[404px] h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/4/1_4.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto lg:col-span-4 md:col-span-6 w-full h-full">
                        </div>
                        <div class="md:col-span-8 md:h-[404px] h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/2/1_5.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto lg:col-span-8 md:col-span-6 w-full h-full">
                        </div>
                    </div>
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/7/1_3.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/1/1_3.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('images/slider/5.webp') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-8 mt-60">
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/3/1_3.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/5/1_3.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('images/slider/4.webp') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-3 grid-cols-1 gap-8 mt-24">
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('storage/kitchen/kitchens/6/1_3.jpg') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('images/slider/2.webp') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                            <div class="h-[277px] w-full rounded-3xl">
                            <img src="{{ asset('images/slider/3.webp') }}" alt="Gallery image" class="gallery-image object-cover rounded-3xl hover:grayscale transition-all duration-700 ease-in-out mx-auto w-full h-full">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="lightbox" id="lightbox">
                    <span class="close" id="close">&times;</span>
                    <img src="" alt="" class="lightbox-image" id="lightbox-image">
                </div>
            </div>
        </section>
    <!-- Initialize Swiper -->
    <script>
        // Get references to elements
        const gallery = document.querySelector('.gallery');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const closeButton = document.getElementById('close');

        // Add event listener to each image
        gallery.addEventListener('click', e => {
        if (e.target.classList.contains('gallery-image')) {
            const imageSrc = e.target.src;
            lightboxImage.src = imageSrc;
            lightbox.style.display = 'flex';
        }
        });

        // Close lightbox when close button is clicked
        closeButton.addEventListener('click', () => {
        lightbox.style.display = 'none';
        });

        // Close lightbox when clicking outside the image
        lightbox.addEventListener('click', e => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
        });
    </script>











{{--

<section class="container max-w-xl p-6 mt-24 mx-auto space-y-12 lg:px-8 lg:max-w-7xl my-24">

    <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-screen-xl flex flex-col justify-center">
     <div class="flex flex-col ">
      <div class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl">
       <div>
        <h1>Simplified markup</h1>
        <p class="text-balance">
         See the code for this page to see how you can use Astro to simplify your markup.
        </p>
       </div>
      </div> <!-- Starts component -->
      <div class="mt-6 border-t pt-12">
       <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center ">
        <div> <span class="text-gray-600  uppercase text-xs font-medium "> Because why not </span>
         <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Innovative financial solutions for every situation </p>
         <p class="text-sm  mt-4 text-gray-700 text-balance"> Discover a variety of tools, services, and expert guidance tailored to your unique financial needs. </p>
         <div class="mt-6 text-xs font-medium grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2 text-gray-950">
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg class="icon icon-tabler text-gray-700 size-4 icon-tabler-360" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M17 15.328c2.414 -.718 4 -1.94 4 -3.328c0 -2.21 -4.03 -4 -9 -4s-9 1.79 -9 4s4.03 4 9 4"></path>
            <path d="M9 13l3 3l-3 3"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Clear data visibility </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg class="icon icon-tabler text-gray-700 size-4 icon-tabler-antenna-bars-3" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M6 18l0 -3"></path>
            <path d="M10 18l0 -6"></path>
            <path d="M14 18l0 .01"></path>
            <path d="M18 18l0 .01"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Reduced external factors </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg class="icon icon-tabler text-gray-700 size-4 icon-tabler-load-balancer" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 13m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
            <path d="M12 20m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M12 16v3"></path>
            <path d="M12 10v-7"></path>
            <path d="M9 6l3 -3l3 3"></path>
            <path d="M12 10v-7"></path>
            <path d="M9 6l3 -3l3 3"></path>
            <path d="M14.894 12.227l6.11 -2.224"></path>
            <path d="M17.159 8.21l3.845 1.793l-1.793 3.845"></path>
            <path d="M9.101 12.214l-6.075 -2.211"></path>
            <path d="M6.871 8.21l-3.845 1.793l1.793 3.845"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> enhanced stabilty </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg class="icon icon-tabler text-gray-700 size-4 icon-tabler-brand-speedtest" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M5.636 19.364a9 9 0 1 1 12.728 0"></path>
            <path d="M16 9l-4 4"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> accelerated times </span> </div>
         </div>
        </div>
        <div class="h-full md:order-first"> <img src="{{ asset('images/slider/1.webp') }}" alt="#_" class=" bg-gray-200 shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center"> </div>
       </div>
       <div class="grid grid-cols-1 gap-8 md:grid-cols-2 md:gap-24 items-center md:flex-row-reverse">
        <div> <span class="text-gray-600  uppercase text-xs font-medium "> Just because we can </span>
         <p class="text-4xl mt-8 tracking-tighter font-semibold text-gray-700 text-balance"> Tailored financial solutions for any scenario </p>
         <p class="text-sm  mt-4 text-gray-700 text-balance"> Discover a range of financial instruments and personalized advice designed to meet your unique requirements. </p>
         <div class="mt-6 text-xs font-medium grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-2 text-gray-950">
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database text-gray-700 size-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0"></path>
            <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
            <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Transparent Data Access </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building text-gray-700 size-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 21l18 0"></path>
            <path d="M9 8l1 0"></path>
            <path d="M9 12l1 0"></path>
            <path d="M9 16l1 0"></path>
            <path d="M14 8l1 0"></path>
            <path d="M14 12l1 0"></path>
            <path d="M14 16l1 0"></path>
            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Lowered Interference </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-augmented-reality-2 text-gray-700 size-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 21h-2a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v3.5"></path>
            <path d="M17 17l-4 -2.5l4 -2.5l4 2.5v4.5l-4 2.5z"></path>
            <path d="M13 14.5v4.5l4 2.5"></path>
            <path d="M17 17l4 -2.5"></path>
            <path d="M11 4h2"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Improved Reliability </span> </div>
          <div class="inline-flex items-center gap-2  text-xs text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-time-duration-0 text-gray-700 size-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 12v.01"></path>
            <path d="M21 12v.01"></path>
            <path d="M12 21v.01"></path>
            <path d="M12 3v.01"></path>
            <path d="M7.5 4.2v.01"></path>
            <path d="M16.5 4.2v.01"></path>
            <path d="M16.5 19.8v.01"></path>
            <path d="M7.5 19.8v.01"></path>
            <path d="M4.2 16.5v.01"></path>
            <path d="M19.8 16.5v.01"></path>
            <path d="M19.8 7.5v.01"></path>
            <path d="M4.2 7.5v.01"></path>
            <path d="M10 11v2a2 2 0 1 0 4 0v-2a2 2 0 1 0 -4 0z"></path>
           </svg> <span class="text-gray-950 font-medium text-sm"> Faster Processing Times </span> </div>
         </div>
        </div>
        <div class="h-full "> <img src="{{ //asset('images/slider/2.webp') }}" alt="#_" class=" bg-gray-200 shadow-box shadow-gray-500/30 overflow-hidden aspect-square  w-full h-full object-cover object-center"> </div>
       </div>
      </div> <!-- Emds component -->

     </div>
    </div>
   </section> --}}


















   <section class="bg-gray-50 dark:bg-slate-800">

    {{-- <div class="container max-w-xl p-6 mt-24 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">

        <x-heading>خدماتنا دائما مستقرة وثابتة</x-heading>

    </div> --}}



{{--
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto text-center">
            <p class="text-sm tracking-widest text-blue-600 dark:text-sky-300 font-bold uppercase">Open Source Theme and UI Components</p>

            <h2 class="mt-6 text-3xl font-bold leading-tight text-black dark:text-slate-50 sm:text-4xl lg:text-5xl">Geaux Astro helps you craft beautiful websites efficiently</h2>
        </div>

        <div class="grid items-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 gap-x-4">
            <div class="space-y-8 lg:pl-16 xl:pl-24 lg:col-span-2 lg:space-y-12">
                <div class="flex items-start">
                    <svg class="flex-shrink-0 text-green-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <div class="mr-5">
                        <h3 class="text-xl font-semibold text-black dark:text-slate-50">Optimize Your Funnel</h3>
                        <p class="mt-3 text-base text-gray-600 dark:text-slate-300">Our Call To Action components can be customized to fit your funnel or drop them in and see how they work for you.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <svg class="flex-shrink-0 text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <div class="mr-5">
                        <h3 class="text-xl font-semibold text-black dark:text-slate-50">Easy to Customize</h3>
                        <p class="mt-3 text-base text-gray-600 dark:text-slate-300">This template is easy to customize so it meets your needs - same with the components.</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <svg class="flex-shrink-0 text-red-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <div class="mr-5">
                        <h3 class="text-xl font-semibold text-black dark:text-slate-50">Made with TailwindCSS</h3>
                        <p class="mt-3 text-base text-gray-600 dark:text-slate-300">The best CSS framework out there allows you to easily customize the theme and components any way you like.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <img class="w-full rounded-lg shadow-xl" src="" alt="Dashboard screenshot" />
            </div>
        </div>
    </div>
 --}}


</section>














   <section class="relative z-10 overflow-hidden bg-app-orange-2 my-28 mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 rounded-lg shadow-lg">
    <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4 lg:w-2/3">
                <div class="text-center lg:text-left ">
                    <div class="mb-10 lg:mb-0 ">
                        <h1
                            class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-white text-right">
                            {{ __('our-works.modern') }}
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
                        {{ __('our-works.book-now') }}
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





</x-layout>
