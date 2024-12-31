

<section class="py-24">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">
        {{-- <h2 class="font-bold text-4xl text-black mb-8 max-xl:text-center">منتجات أخرى</h2> --}}



        <div class="bg-white p-8 sm:p-16 dark:bg-gray-900 rounded-lg shadow-sm">
            <div class="p-4 mb-4 text-lg text-left rtl:text-right leading-tight first-letter:capitalize font-medium dark:text-gray-100">
              <h3>
                {{ __('messages.products') }}
              </h3>
            </div>

            <div class="mx-auto w-fit grid grid-cols-1 lg:grid-cols-4 sm:grid-cols-2 gap-6">

            @foreach ($furniture_random as $furniture_r)


            {{-- @dd($furniture_r) --}}
            <!-- card -->
            <a href="{{ route('furniture.show', ['furniture' => $furniture_r->id]) }}" class="relative group bg-gray-100 h-[400px] shadow-md rounded-2xl overflow-hidden">

                @foreach (collect($furniture_r->product_image)->take(1) as $random_r_image)
                    <img class="w-full h-full group-hover:h-64 object-contain rounded-2xl transition-all delay-150 duration-300 ease" src="{{ asset("storage/$random_r_image") }}" alt="{{ $furniture_r->title }}" />
                @endforeach

              <div class="bg-gray-100 w-full absolute left-0 bottom-0 -mb-44 group-hover:mb-0 rounded-b-2xl transition-all delay-150 duration-300 ease dark:bg-gray-700">
                <div class="p-6">
                  <div class="capitalize flex items-center justify-between gap-4">
                    <div>
                      <h2 class="text-red-600 text-lg font-bold">{{ $furniture_r->title }}</h2>
                      <p class="dark:text-gray-100 text-xs">{{ $furniture_r->model }}</p>
                    </div>
                    <div>
                    {{-- <p class="text-3xl font-bold dark:text-gray-100">$160</p> --}}
                    </div>
                  </div>
                  {{-- <div class="block mt-4">
                    <div class="absolute bottom-2 left-5">
                      <button class="bg-red-600 text-gray-100 font-medium py-2.5 px-4 rounded-xl opacity-90 hover:opacity-100">Add to cart</button>
                    </div>
                  </div> --}}
                </div>
              </div>
            </a>
            <!-- end card -->

            @endforeach

            </div>
        </div>




    </div>
</section>


