<div class="swiper new-furniture-items">
    <div class="swiper-wrapper">
        @foreach ($new_furniture as $new)
            <div class="swiper-slide flex flex-col">
                <div>
                    <a href="{{ route('furniture.show', ['furniture' => $new->id]) }}"
                        class="relative bg-cover group rounded-3xl bg-center overflow-hidden mx-auto sm:mr-0 xl:mx-auto cursor-pointer">

                        @foreach (collect($new->product_image)->take(1) as $img_prod)
                            <img class="w-full !h-64" src="{{ asset("storage/$img_prod") }}" alt="{{  $new->title }}">
                        @endforeach
                    </a>
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <a href="{{ route('furniture.show', ['furniture' => $new->id]) }}"
                            class="">
                            <h6
                                class="font-semibold text-sm leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                                {{ $new->title }}
                            </h6>
                        </a>
                        {{-- <h6 class="font-semibold text-xl leading-8 text-indigo-600">$100</h6> --}}
                    </div>
                    {{-- <p class="mt-2 font-normal text-sm leading-6 text-gray-500">أثاث</p> --}}
                </div>
            </div>
        @endforeach


    </div>
    {{-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div> --}}
  </div>