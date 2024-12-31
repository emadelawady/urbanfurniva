{{-- <div class="container max-w-xl py-6 mt-32 mx-auto space-y-12 lg:max-w-7xl">
    <x-heading :link="route('kitchens')" class="!mb-0">
        {{ $sectionTitle }}
    </x-heading>
</div> --}}


{{-- @dd($model) --}}


<section class="max-w-xl mx-auto space-y-12 lg:max-w-7xl mb-12 rounded-md">



<div class="font-sans py-8">

        {{-- @dd(array_keys($model), $model) --}}

        @foreach($model as $k)

    <div class="w-full flex mt-16">



        {{-- @dd($k[3]) --}}

        <a href="{{ route($k[0]) }}" class="text-gray-700 bg-slate-50 rounded-lg shadow-xs mx-4 px-2 py-1 flex items-center group hover:scale-[1.03] transition-all hover:shadow-sm">

            <span class="mx-2 group-hover:text-app-orange-2">
                {{ __($k[1]) }}
            </span>

        </a>


    </div>


    <div class="w-full flex flex-row justify-around py-4 lg:p-0 mb-8">



      <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-4 border lg:border-none rounded-md py-4 lg:p-0">

        @foreach ($k[3] as $bb_g)


        <a href="{{ route($k[2][0], [$k[2][1] => $bb_g->id]) }}" class="bg-white p-3 cursor-pointer rounded-md hover:scale-[1.03] transition-all shadow-sm">
          <div class="w-full h-[120px] overflow-hidden mx-auto aspect-w-10 aspect-h-5">

            @foreach (collect($bb_g->product_image)->take(1) as $p_main_image)

                <img src="{{ asset("storage/$p_main_image") }}"
                    alt="{{ $bb_g->title }}" class="h-full w-full rounded-lg mx-auto block object-cover" />
            @endforeach

          </div>
            <div class="text-center mt-4">
                <h3 class="text-xs font-bold text-gray-800">
                    {{ $bb_g->title }}
                </h3>
                {{-- <h4 class="text-base text-blue-600 font-bold mt-2">$95.00</h4> --}}
            </div>
        </a>


        @endforeach

      </div>

    </div>

    @endforeach


  </div>


</section>
