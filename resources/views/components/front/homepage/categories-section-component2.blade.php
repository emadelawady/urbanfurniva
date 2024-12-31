<div class="container max-w-xl py-6 mt-32 mx-auto space-y-12 lg:max-w-7xl">
    <x-heading :link="route('kitchens')" class="!mb-0">
        {{ __('messages.kitchen_categories') }}
    </x-heading>
</div>




<section class="container max-w-xl mx-auto space-y-12 lg:max-w-7xl mb-32 rounded-md">





<div class="font-sans py-8">
    <div class="mx-auto lg:max-w-7xl md:max-w-5xl">


        {{-- <div class="grid grid-cols-1 my-4">

            <div class="w-full flex items-center justify-start">
                <h1>شفاطات المطبخ</h1>

            </div>
          </div> --}}



      {{-- <h2 class="text-4xl font-extrabold text-gray-800 text-center mb-12">Top Products</h2> --}}

    <div class="w-full flex mt-8">
        <a href="{{ route('range.hood') }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">

            <span class="mx-2 group-hover:text-app-orange-2">
                {{ __('messages.range-hood') }}
            </span>

        </a>
    </div>


    @dd($model['burnergas'], $getName('burnergas'))


      <div class="w-full flex flex-row justify-around">

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mt-4">

        @foreach ($model->getName($name) as $rr_h)

        <a href="{{ route('range.hood.show',['rangeHood' => $rr_h->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
          <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4 rounded-lg">
            <img src="{{ asset("storage/$rr_h->product_image") }}" alt="{{ $rr_h->title }}"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-xs font-bold text-gray-800">
                {{ $rr_h->title }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
          </div>
        </a>
        @endforeach

      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">


        @foreach ($model['ovens'] as $ovv)

        <a href="{{ route('ovens.show',['oven' => $ovv->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
          <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4">
            <img src="{{ asset("storage/$ovv->product_image") }}" alt="{{ $ovv->title }}"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ $ovv->title }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
          </div>
        </a>
        @endforeach

      </div>

    </div>





    <div class="w-full flex mt-16">
        <a href="{{ route('burner.gas') }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">

            <span class="mx-2 group-hover:text-app-orange-2">
                {{ __('messages.burner-gas') }}
            </span>

        </a>
    </div>


    <div class="w-full flex flex-row justify-around p-4 lg:p-0 mb-8">




      <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-4 border lg:border-none rounded-md p-4 lg:p-0">

        @foreach ($model['burnergas'] as $bb_g)

        <a href="{{ route('burner.gas.show',['burnerGas' => $bb_g->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
          <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4">
            <img src="{{ asset("storage/$bb_g->product_image") }}" alt="{{ $bb_g->title }}"
              class="h-full w-5/6 mx-auto block object-contain" />
          </div>
          <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ $bb_g->title }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
          </div>
        </a>
        @endforeach

      </div>

    </div>







    <div class="w-full flex justify-evenly lg:justify-between mt-24 mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('trolls') }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">
                <span class="mx-2 group-hover:text-app-orange-2">
                    {{ __('messages.trolls') }}
                </span>
            </a>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <a href="{{ route('doorHandle') }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">
                <span class="mx-2 group-hover:text-app-orange-2">
                    {{ __('messages.door-handle') }}
                </span>
            </a>
        </div>
    </div>



    <div class="w-full flex flex-row justify-around">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">

        @foreach ($model['trolls'] as $tt_ro)

        <a href="{{ route('trolls.show',['troll' => $tt_ro->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
        <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4 rounded-lg">
            <img src="{{ asset("storage/$tt_ro->product_image") }}" alt="{{ $tt_ro->title }}"
            class="h-full w-5/6 mx-auto block object-contain" />
        </div>
        <div class="text-center mt-4">
            <h3 class="text-xs font-bold text-gray-800">
                {{ $tt_ro->title }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
        </div>
        </a>
        @endforeach

    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">


        @foreach ($model['doorhandles'] as $ddh)

        <a href="{{ route('doorHandle.show',['doorHandle' => $ddh->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
        <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4">
            <img src="{{ asset("storage/$ddh->product_image") }}" alt="{{ $ddh->title }}"
            class="h-full w-5/6 mx-auto block object-contain" />
        </div>
        <div class="text-center mt-4">
            <h3 class="text-sm font-bold text-gray-800">
                {{ $ddh->title }}
            </h3>
            {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
        </div>
        </a>
        @endforeach

    </div>

    </div>






    <div class="w-full flex mt-16">
        <a href="{{ route('sinks') }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">

            <span class="mx-2 group-hover:text-app-orange-2">
                {{ __('messages.sinks') }}
            </span>

        </a>
    </div>

    <div class="w-full flex flex-row justify-around p-4 lg:p-0 mb-8">
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-4 border lg:border-none rounded-md p-4 lg:p-0">

            @foreach ($model['sinks'] as $ss_s)

            <a href="{{ route('sinks.show' ,['sink' => $ss_s->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
            <div class="w-full h-[90px] overflow-hidden mx-auto aspect-w-8 aspect-h-4">
                <img src="{{ asset("storage/$ss_s->product_image") }}" alt="{{ $ss_s->title }}"
                class="h-full w-5/6 mx-auto block object-contain" />
            </div>
            <div class="text-center mt-4">
                <h3 class="text-sm font-bold text-gray-800">
                    {{ $ss_s->title }}
                </h3>
                {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
            </div>
            </a>
            @endforeach

        </div>

    </div>




      {{-- See More --}}


      <div class="grid grid-cols-1 my-4">

        <div class="w-full flex items-center justify-end mt-6 md:mt-0">
            <div class="">
                <x-sec-button :link="route('kitchens')" class="w-1/3 mx-auto">{{ __('messages.learn-more') }}</x-sec-button>
            </div>
        </div>

      </div>





    </div>
  </div>


</section>
