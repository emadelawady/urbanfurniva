  <!-- Swiper -->
  <div dir="rtl" class="swiper hero-slider">
    <div class="swiper-wrapper bg-black">
      <div class="swiper-slide relative">

        <div class="absolute left-0 right-0 text-gray-200 m-4 p-4 z-40">
            <h1 class="text-5xl my-4">
                {{ __('homepage.dream') }}
            </h1>
            <p class="m-y4 text-sm">
                {{ __('homepage.everything') }}
            </p>
        </div>



        <img src="{{ asset('storage/kitchen/kitchens/2/1_5.jpg') }}" alt="">


      </div>
      <div class="swiper-slide relative">
        <div class="absolute left-0 right-0 text-gray-200 m-4 p-4 z-40">
            <h1 class="text-5xl my-4">
                {{ __('homepage.kitchen-as') }}
            </h1>
            <p class="m-y4 text-sm">
                {{ __('homepage.technicians') }}
            </p>
        </div>
        <img src="{{ asset('storage/kitchen/kitchens/7/1_3.jpg') }}" alt="">

      </div>
      <div class="swiper-slide relative">
        <div class="absolute left-0 right-0 text-gray-200 m-4 p-4 z-40">
            <h1 class="text-5xl my-4">
                {{ __('homepage.kitchen-is') }}
            </h1>
            <p class="m-y4 text-sm">
                {{ __('homepage.highest-quality') }}
            </p>
        </div>
        <img src="{{ asset('storage/kitchen/kitchens/4/1_4.jpg') }}" alt="">



      </div>
      <div class="swiper-slide relative">
        <div class="absolute left-0 right-0 text-gray-200 m-4 p-4 z-40">
            <h1 class="text-5xl my-4">
                {{ __('homepage.competitive') }}
            </h1>
            <p class="m-y4 text-sm">
                {{ __('homepage.comprehensive') }}
            </p>
        </div>
        <img src="{{ asset('storage/kitchen/kitchens/1/1_3.jpg') }}" alt="">


      </div>
      <div class="swiper-slide relative">
        <div class="absolute left-0 right-0 text-gray-200 m-4 p-4 z-40">
            <h1 class="text-5xl my-4">
                {{ __('homepage.contact-us') }}
            </h1>
            <p class="m-y4 text-sm">
                {{ __('homepage.professionalism') }}
            </p>
        </div>
        <img src="{{ asset('storage/kitchen/kitchens/3/1_3.jpg') }}" alt="">
      </div>
    </div>
    {{-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> --}}
    <div class="swiper-pagination"></div>
  </div>





  <style>

/* overlay */


.hero-slider .swiper-wrapper .swiper-slide:after, .hero-slider .swiper-wrapper .swiper-slide img:after {
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
