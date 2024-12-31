<div class="">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
        class="swiper {{ $swiperClass ?? 'defaultContainer' }} mb-6">
        <div class="swiper-wrapper">
            @foreach ($model as $prod_image)
                <div class="swiper-slide">
                    <img src="{{ asset("storage/$prod_image") }}"
                        alt="{{ $title }}" class="w-full h-96 mx-auto object-cover rounded-lg">
                </div>
            @endforeach
        </div>

    </div>
    <div thumbsSlider="" class="swiper {{ $swiperThumb ?? 'defaultThumb' }} max-w-[608px] mx-auto">
        <div class="swiper-wrapper mx-auto">
            @foreach ($model as $prod_2_image)
            <div class="swiper-slide">
                <img src="{{ asset("storage/$prod_2_image") }}" alt="{{ $title }}"
                    class="w-full h-20 rounded-md cursor-pointer border-2 border-gray-50 transition-all duration-500 hover:border-indigo-600 slide:border-indigo-600 object-cover">
            </div>
            @endforeach
        </div>
    </div>
</div>
