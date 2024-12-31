<div class="max-w-xl py-6 mt-32 mx-auto space-y-12 lg:max-w-7xl">
    <x-heading class="!mb-0">
        {{-- {{ __('kitchens.latest-kitchens') }} --}}

        {{ __('messages.categories') }}
    </x-heading>
</div>





<section class="max-w-xl mx-auto space-y-12 lg:px-8 lg:max-w-7xl mb-32 rounded-md">


<div class="font-sans px-4 py-8">
    <div class="mx-auto lg:max-w-6xl md:max-w-4xl">

      {{-- <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Top Products</h2> --}}

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

        <a href="{{ route('range.hood') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/rangehoods/1_1.jpg') }}" alt="product1"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.range-hood') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
          </div>
        </a>

        <a href="{{ route('burner.gas') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/burnergas/1_1.jpg') }}" alt="product2"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.burner-gas') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$20.00</h4> --}}
          </div>
        </a>

        <a href="{{ route('ovens') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/ovens/1_1.jpg') }}" alt="product3"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.ovens') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$400.00</h4> --}}
          </div>
        </a>

        <a href="{{ route('trolls') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/trolls/1_1.jpg') }}" alt="product4"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.trolls') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$11.00</h4> --}}
          </div>
        </a>

        <a href="{{ route('doorHandle') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/doorhandles/1_1.jpg') }}" alt="product5"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.door-handle') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$90.00</h4> --}}
          </div>
        </a>

        <a href="{{ route('sinks') }}" class="bg-white p-3 cursor-pointer shadow-sm rounded-md hover:scale-[1.03] transition-all">
          <div class="w-full h-[130px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
            <img src="{{ asset('storage/kitchen/sinks/1_1.jpg') }}" alt="product6"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ __('messages.sinks') }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$110.00</h4> --}}
          </div>
        </a>


      </div>
    </div>
  </div>


</section>



