<x-layout>

    <x-slot:title>
        {!! config('app.name') !!} - {{ $livingRoom->title }}
    </x-slot>


<div class="min-w-screen min-h-screen flex flex-col items-center p-5 lg:p-10 overflow-hidden relative">

    <div class="w-full max-w-6xl flex my-12">
        <x-filament::breadcrumbs class="bg-gray-50 p-2 rounded-md" :breadcrumbs="[
            // route('home.page') => __('messages.home'),
            route('furniture') => __('furniture.furniture'),
            route('furniture.livingroom') => __('messages.living-room'),
            'javascript:avoid(0)' => $livingRoom->title,
            // '' => '',
        ]" />
    </div>

    <div class="w-full max-w-6xl rounded bg-white shadow-md p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">


        <div class="md:flex items-center -mx-10">

            <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10 *:leading-10 text-center *:text-app-orange">
                        <h1 class="font-bold uppercase mb-10 text-3xl leading-none align-baseline !text-app-orange-2">
                            {{ $livingRoom->title }}
                        </h1>

                        {!! $livingRoom->content !!}

                    </div>



                    <div class="w-full my-4">
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                الوزن والأبعاد :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->weight }}
                            </p>
                        </div>
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                اللون :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->color }}
                            </p>
                        </div>
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                سعة المقعد :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->capacity }}
                            </p>
                        </div>
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                الخامة :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->material }}
                            </p>
                        </div>
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                خامة التنجيد :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->upholstery_material }}
                            </p>
                        </div>
                        <div class="flex my-2">
                            <span class="text-app-orange-2">
                                الضمان والحماية :
                            </span>
                            <p class="mx-4 text-gray-500">
                                {{ $livingRoom->warranty }}
                            </p>
                        </div>

                    </div>



                    <div class="w-full flex items-center justify-start mt-12">

                        <p class="text-xl">{{ __('messages.contact-in-show-page') }}</p>
                        <a
                            class="mx-4"
                            aria-label="Chat on WhatsApp"
                            target="_blank"
                            href="https://wa.me/966538383995/?text={{ __('messages.asking-about') . request()->url() }}">

                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-10" viewBox="0 0 48 48">
                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                                </svg>
                        </a>


                    </div>



                <div class="rtl:text-left">
                    {{-- <div class="inline-block align-bottom mr-5">
                        <span class="text-2xl leading-none align-baseline">{{ $rangeHood->model }}</span>
                        <span class="font-bold text-5xl leading-none align-baseline">{{ $rangeHood->model }}</span>
                        <span class="text-2xl leading-none align-baseline">{{ $rangeHood->model }}</span>
                    </div> --}}
                    <div class="inline-block align-bottom">
                        <button class="opacity-75 hover:opacity-100 text-slate-700 hover:text-slate-800 font-semibold border px-2 rounded-lg">
                            {{ $livingRoom->model }}
                        </button>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                <div class="relative">


                    <x-front.furniture.livingroom.sofa.show-page-slider
                        :title="$livingRoom->title"
                        :model="collect($livingRoom->product_image)->take(4)"
                        :swiperClass="'furniture-livingroom-product-prev'"
                        :swiperThumb="'furniture-livingroom-product-thumb'"

                    />


                </div>
            </div>

        </div>
    </div>
</div>













<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

    <div class="border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ltr:mr-3 rtl:ml-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>


            <span class="font-semibold inline-block">منتجات اخرى</span>
        </div>
        <a href="{{ route('furniture.livingroom') }}" class="hover:text-indigo-600">مشاهدة الكل</a>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

        @foreach ($livingRoomAll as $l_r)

        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            {{-- <a href="#"></a> --}}
            <div class="relative">
                <a href="{{ route('furniture.livingroom.show', ['livingRoom' => $l_r->id]) }}">


                    @foreach ($l_r->product_image as $ro)

                        @if ($loop->first)

                            <img
                            src="{{ asset("storage/$ro") }}"
                            alt="{{ $l_r->title }}"
                            class="w-full h-64"
                            />
                        @endif

                    @endforeach


                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out rounded-md">
                        {{ $l_r->model }}
                    </div>
                </a>
            </div>
            <div class="px-6 py-4 mb-auto">
                <a href="#"
                    class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    {{ $l_r->title }}
                </a>
                {{-- <p class="text-gray-500 text-sm">
                    {{ $r_h->model }}
                </p> --}}
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    {{-- <span class="rtl:mr-1 ltr:ml-1">6 mins ago</span> --}}
                </span>

                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    {{-- <span class="rtl:mr-1 ltr:ml-1">39 Comments</span> --}}
                </span>
            </div>
        </div>
        @endforeach


    </div>

</div>








</x-layout>
