

<section class="py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-bold text-4xl text-black mb-8 max-xl:text-center">منتجات أخرى</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8">


            @foreach ($kitchens_random as $kitchen_r)
            <a href="{{ route('kitchens.show', ['kitchen' => $kitchen_r->id]) }}"
                class="relative bg-cover group rounded-3xl bg-center overflow-hidden mx-auto sm:mr-0 xl:mx-auto cursor-pointer">

                @foreach (collect($kitchen_r->product_image)->take(1) as $random_prod_image)
                    <img class="rounded-2xl object-cover" src="{{ asset("storage/$random_prod_image") }}" alt="{{ $kitchen_r->title }}">
                @endforeach
                <div
                    class="absolute z-10 bottom-3 left-0 mx-3 p-3 bg-white w-[calc(100%-24px)] rounded-xl shadow-sm shadow-transparent transition-all duration-500 group-hover:shadow-indigo-200 group-hover:bg-indigo-50">
                    <div class="flex items-center justify-between mb-2">
                        <h6 class="font-semibold text-base leading-7 text-black ">{{ $kitchen_r->title }}</h6>
                        {{-- <h6 class="font-semibold text-base leading-7 text-indigo-600 text-right">$100</h6> --}}
                    </div>
                    <p class="text-xs leading-5 text-gray-500">مطابخ جديدة</p>
                </div>
            </a>
            @endforeach
{{--
            <a href="javascript:;"
                class="relative bg-cover group rounded-3xl bg-center overflow-hidden mx-auto sm:ml-0 xl:mx-auto cursor-pointer">
                <img class="rounded-2xl object-cover" src="https://pagedone.io/asset/uploads/1700731993.png" alt="Blazer image">
                <div
                    class="absolute z-10 bottom-3 left-0 mx-3 p-3 bg-white w-[calc(100%-24px)] rounded-xl shadow-sm shadow-transparent transition-all duration-500 group-hover:shadow-indigo-200 group-hover:bg-indigo-50">
                    <div class="flex items-center justify-between mb-2">
                        <h6 class="font-semibold text-base leading-7 text-black ">Black Blazer</h6>
                        <h6 class="font-semibold text-base leading-7 text-indigo-600 text-right">$100</h6>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Men’s Suits</p>
                </div>
            </a>
            <a href="javascript:;"
                class="relative bg-cover group rounded-3xl bg-center overflow-hidden mx-auto sm:mr-0 xl:mx-auto cursor-pointer">
                <img class="rounded-2xl object-cover" src="https://pagedone.io/asset/uploads/1700732011.png" alt="printed top image">
                <div
                    class="absolute z-10 bottom-3 left-0 mx-3 p-3 bg-white w-[calc(100%-24px)] rounded-xl shadow-sm shadow-transparent transition-all duration-500 group-hover:shadow-indigo-200 group-hover:bg-indigo-50">
                    <div class="flex items-center justify-between mb-2">
                        <h6 class="font-semibold text-base leading-7 text-black ">Red Flowers</h6>
                        <h6 class="font-semibold text-base leading-7 text-indigo-600 text-right">$100</h6>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Womenswear</p>
                </div>
            </a>

            <a href="javascript:;"
                class="relative bg-cover group rounded-3xl bg-center overflow-hidden mx-auto sm:ml-0 xl:mx-auto cursor-pointer">
                <img class="rounded-2xl object-cover" src="https://pagedone.io/asset/uploads/1700732027.png" alt="Denim jacket image">
                <div
                    class="absolute z-10 bottom-3 left-0 mx-3 p-3 bg-white w-[calc(100%-24px)] rounded-xl shadow-sm shadow-transparent transition-all duration-500 group-hover:shadow-indigo-200 group-hover:bg-indigo-50">
                    <div class="flex items-center justify-between mb-2">
                        <h6 class="font-semibold text-base leading-7 text-black ">Denim Jacket</h6>
                        <h6 class="font-semibold text-base leading-7 text-indigo-600 text-right">$100</h6>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Children Wear</p>
                </div>
            </a> --}}
        </div>
    </div>
</section>
