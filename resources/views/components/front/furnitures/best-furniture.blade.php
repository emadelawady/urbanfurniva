

<section class="mt-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        {{-- <h2 class="font-bold text-4xl text-black mb-8 max-lg:text-center">
            أفضل المنتجات
        </h2> --}}

        <div class="mb-4 text-lg text-left rtl:text-right leading-tight first-letter:capitalize font-medium dark:text-gray-100">
            <h3>
              {{ __('messages.other-products') }}
            </h3>
          </div>



        <div class="mx-auto w-fit grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">

            @foreach ($furniture_best as $furniture_b)
                <a href="{{ route('furniture.show', ['furniture' => $furniture_b->id]) }}"
                    class="mx-auto sm:mr-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                    <div class="">

                        @foreach (collect($furniture_b->product_image)->take(1) as $best_prod_image_f)

                            <img src="{{ asset("storage/$best_prod_image_f") }}" alt="face cream image"
                            class="w-full aspect-square rounded-2xl object-cover">
                        @endforeach
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center justify-center">
                            <h6
                                class="font-semibold text-sm leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                                {{ $furniture_b->title }}
                            </h6>
                            {{-- <h6 class="font-semibold text-xl leading-8 text-indigo-600">$100</h6> --}}
                        </div>
                        <p class="mt-2 font-normal text-xs leading-6 text-gray-500">أثاث</p>
                    </div>
                </a>
            @endforeach

       {{-- </div>     <a href="javascript:;"
                class="mx-auto sm:ml-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                <div class="">
                    <img src="https://pagedone.io/asset/uploads/1700726174.png" alt="plastic bottle image"
                        class="w-full aspect-square rounded-2xl object-cover">
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <h6
                            class="font-semibold text-xl leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                            Plstic bottle</h6>
                        <h6 class="font-semibold text-xl leading-8 text-indigo-600">$40</h6>
                    </div>
                    <p class="mt-2 font-normal text-sm leading-6 text-gray-500">Black color</p>
                </div>
            </a>

            <a href="javascript:;"
                class="mx-auto sm:mr-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                <div class="">
                    <img src="https://pagedone.io/asset/uploads/1700726191.png" alt="cream image"
                        class="w-full aspect-square rounded-2xl object-cover">
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <h6
                            class="font-semibold text-xl leading-8 text-black  transition-all duration-500 group-hover:text-indigo-600">
                            Men cream</h6>
                        <h6 class="font-semibold text-xl leading-8 text-indigo-600">$100</h6>
                    </div>
                    <p class="mt-2 font-normal text-sm leading-6 text-gray-500">Aloe Vera and Neem</p>
                </div>
            </a>

            <a href="javascript:;"
                class="mx-auto sm:ml-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                <div class="">
                    <img src="https://pagedone.io/asset/uploads/1700726207.png" alt="perfume bottle image"
                        class="w-full aspect-square rounded-2xl object-cover">
                </div>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <h6
                            class="font-semibold text-xl leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                            Cold Perfume</h6>
                        <h6 class="font-semibold text-xl leading-8 text-indigo-600">$100</h6>
                    </div>
                    <p class="mt-2 font-normal text-sm leading-6 text-gray-500">White perfume</p>
                </div>
            </a> --}}

        </div>
    </div>
</section>
