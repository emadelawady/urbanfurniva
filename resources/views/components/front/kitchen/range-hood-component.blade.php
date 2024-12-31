<section class="flex flex-col items-center justify-center">

    <div class="w-full">
        <div class="p-4 mx-auto lg:max-w-7xl sm:max-w-full">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-6">
        {{ __('messages.range-hood') }}
        </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6 py-8">


                @foreach ($rangehood as $range)

                    <a  href="{{ route('range.hood.show', ['rangeHood' => $range->id]) }}" class="bg-white rounded-2xl p-5 cursor-pointer hover:-translate-y-2 transition-all relative hover:ring-1 hover:ring-red-200">

                            {{-- <div
                            class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-4 right-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                <path
                                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                    data-original="#000000"></path>
                                </svg>
                            </div> --}}

                        <div class="w-5/6 h-[150px] overflow-hidden mx-auto aspect-w-8 aspect-h-4 md:mb-2 mb-4">
                            <img src="{{ asset("storage/$range->product_image") }}" alt="Product 1"
                            class="h-full w-full object-contain" />
                        </div>

                        <div>
                            <h3 class="text-lg font-extrabold text-gray-800">{{ $range->title }}</h3>
                            <p class="text-gray-600 text-xs mt-2">
                                {{ $range->model }}
                            </p>
                            {{-- <h4 class="text-lg text-gray-800 font-bold mt-4">$10</h4> --}}
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </div>



    <x-pri-button :link="route('range.hood')" class="w-1/3 mx-auto">{{ __('messages.learn-more') }}</x-pri-button>


</section>
