<x-layout>


<x-slot:title>
    {!! config('app.name') !!}- {{ __('nav.furniture') }}
</x-slot>


    <!-- Hero section -->
<section class="py-2">
    <div class="container mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-4 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-4 md:mb-0 text-center">
                <h1 class="text-app-orange-2 font-bold text-3xl leading-tight mb-12">
                    {{ __('furniture.discover') }}
                </h1>
                <p class="text-gray-400 text-xl mb-16">
                    {{ __('furniture.materials') }}
                </p>
                {{-- <a href="{{ route('contact.us') }}"
                    class="px-6 py-3 border text-app-orange border-primary font-bold rounded-full transition duration-200">
                    {{ __('nav.contact-us') }}
                </a> --}}
            </div>
            <div class="md:w-1/2 mt-12">
                    <a href="javascript:void(0)">
                        @foreach (collect($furnitures_random_one->product_image)->take(1) as $fur_random_image)
                            <img src="{{ asset("storage/$fur_random_image") }}" alt="{{ $furnitures_random_one->title }}"
                        class="w-5/6 h-96 m-auto rounded-lg shadow-lg bg-secondary">
                        @endforeach
                    </a>
            </div>
        </div>
    </div>
</section>








<section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0 my-14">
    <section
        class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 md:mx-8 lg:mx-0 xl:grid-cols-3 2xl:grid-cols-4 gap-10 m-auto items-start ">




@foreach ($furnitures as $fur)
            <a href="{{ route('furniture.show', ['furniture' => $fur->id]) }}" class="p-5 py-10 shadow-sm text-center transform duration-500 hover:-translate-y-2 cursor-pointer rounded-md">


                @foreach (collect($fur->product_image)->take(1) as $fur_main_image)


                    <img src="{{ asset("storage/$fur_main_image") }}"
                        alt="{{ $fur->title }}" class="!h-64 w-full object-cover rounded-md m-auto" />
                @endforeach



                {{-- <div class="space-x-1 flex justify-center mt-10">
                    <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z">
                        </path>
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z">
                        </path>
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z">
                        </path>
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-orange-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z">
                        </path>
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-gray-300" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z">
                        </path>
                    </svg>
                </div> --}}
                <h1 class="text-sm my-5">
                        {{ $fur->title }}
                </h1>
                {{-- <p class="mb-5">{!! $fur->model !!}</p> --}}



                {{-- <h2 class="font-semibold mb-5">$29.99</h2> --}}
                {{-- <button class="p-2 px-6 bg-purple-500 text-white rounded-md hover:bg-purple-600">Add To Cart</button> --}}
            </a>

        @endforeach
    </section>
</section>






{{-- <x-front.furniture.furniture-categories-component /> --}}
<x-front.furniture.furniture-categories-component
:attr="\App\Enums\FurnitureCategoriesEnum::Furniture->getData()"

/>








<div class="bg-white py-12">
    <div class="container mx-auto px-4">
        <x-heading :link="'javascript:avoid(0)'" class="my-6">
            <a href="javacsript:avoid(0)" class="font-semibold inline-block text-2xl text-gray-600 hover:text-gray-800">
                {{ __('messages.living-room') }}
            </a>
        </x-heading>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                <!-- Large item -->
                <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group bg-gray-50 hover:shadow-lg">


                    @foreach (collect($furnitures_random_one->product_image)->take(1) as $fur_random_image)
                        <img src="{{ asset("storage/$fur_random_image") }}" alt="{{ $furnitures_random_one->title }}"
                    class="w-full h-full object-cover">
                    @endforeach

                    <a href="{{ route('furniture.livingroom.chair.show', ['chair' => $furnitures_random_one->id]) }}"
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4 !text-white">
                            <h3 class="text-2xl font-bold text-white">
                                <span>
                                    {{ $furnitures_random_one->title }}
                                </span>
                            </h3>
                            <p class="text-white">{!! $furnitures_random_one->content !!}</p>
                        </div>
                    </a>
                </div>




            @foreach ($furnitures_livingroom_sofa->take(4) as $furs)
                <!-- Two small items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group bg-gray-50 hover:shadow-lg">

                    @foreach (collect($furs->product_image)->take(1) as $fur_random_image_2)
                        <img src="{{ asset("storage/$fur_random_image_2") }}" alt="{{ $furs->title }}"
                    class="w-full h-full object-cover rounded-lg shadow-sm">
                    @endforeach

                    <a href="{{ route('furniture.livingroom.sofa.show', ['sofa' => $furs->id]) }}"
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">
                                <span>
                                    {{ $furs->title }}
                                </span>
                            </h4>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>











<section class="py-10">
    <div class="container mx-auto px-4">

        <div class="my-10">
            <x-heading :link="'javascript:avoid(0)'">{{ __('messages.bedrooms') }}</x-heading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">


            @foreach ($furnitures_bedroom as $f_f_r)

            <!-- bottom cards -->
            <div class="relative overflow-hidden rounded-2xl shadow-sm group bg-gray-50 hover:shadow-lg">

                @foreach (collect($f_f_r->product_image)->take(1) as $fur_fur_random_image_2)
                    <img src="{{ asset("storage/$fur_fur_random_image_2") }}" alt="{{ $f_f_r->title }}"
                class="w-full h-48 object-cover  rounded-lg shadow-md">
                @endforeach

                <a href="{{ route('furniture.bedroom.show', ['bedroom' => $f_f_r->id]) }}"
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">

                            <span>{{ $f_f_r->title }}</span>
                        </h4>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

    </div>

</section>




<section class="py-10">
    <div class="container mx-auto px-4">

        <div class="my-10">
            <x-heading :link="'javascript:avoid(0)'">{{ __('messages.diningroom') }}</x-heading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">


            @foreach ($furnitures_diningroom as $f_f_r)

            <!-- bottom cards -->
            <div class="relative overflow-hidden rounded-2xl shadow-sm group bg-gray-50 hover:shadow-lg">

                @foreach (collect($f_f_r->product_image)->take(1) as $fur_fur_random_image_2)
                    <img src="{{ asset("storage/$fur_fur_random_image_2") }}" alt="{{ $f_f_r->title }}"
                class="w-full h-48 object-cover  rounded-lg shadow-md">
                @endforeach

                <a href="{{ route('furniture.show', ['furniture' => $f_f_r->id]) }}"
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-80 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">

                            <span>{{ $f_f_r->title }}</span>
                        </h4>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

    </div>

</section>





<div class="bg-white py-12">
    <div class="container mx-auto px-4">
        <x-heading :link="'javascript:avoid(0)'" class="my-6">
            <a href="javacsript:avoid(0)" class="font-semibold inline-block text-2xl text-gray-600 hover:text-gray-800">
                {{ __('messages.officefurniture') }}
            </a>
        </x-heading>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">



            @foreach ($furnitures_officefurniture_heads as $office_item_head)


                <!-- Large item -->
                <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group bg-gray-50 hover:shadow-lg">


                    @foreach (collect($office_item_head->product_image)->take(1) as $fur_office_image)
                        <img src="{{ asset("storage/$fur_office_image") }}" alt="{{ $office_item_head->title }}"
                    class="w-full h-full object-cover">
                    @endforeach

                    <a href="{{ route('furniture.officefurniture.show', ['officefurniture' => $office_item_head->id]) }}"
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4 !text-white">
                            <h3 class="text-2xl font-bold text-white">
                                <span>
                                    {{ $office_item_head->title }}
                                </span>
                            </h3>
                            <p class="text-white">{!! $office_item_head->content !!}</p>
                        </div>
                    </a>
                </div>


            @endforeach



            @foreach ($furnitures_officefurniture_rest->take(4) as $furs_off)
                <!-- Two small items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group bg-gray-50 hover:shadow-lg">

                    @foreach (collect($furs_off->product_image)->take(1) as $fur_office_image_2)
                        <img src="{{ asset("storage/$fur_office_image_2") }}" alt="{{ $furs_off->title }}"
                    class="w-full h-full object-cover rounded-lg shadow-sm">
                    @endforeach

                    <a href="{{ route('furniture.officefurniture.show', ['officefurniture' => $furs_off->id]) }}"
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">
                                <span>
                                    {{ $furs_off->title }}
                                </span>
                            </h4>
                        </div>
                    </a>
                </div>
            @endforeach






        </div>
    </div>
</div>











<section class="py-10">
    <div class="container mx-auto px-4">

        <div class="my-10">
            <x-heading :link="'javascript:avoid(0)'">{{ __('messages.outdoorfurniture') }}</x-heading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


            @foreach ($furnitures_outdoorfurniture as $f_f_r)

            <!-- bottom cards -->
            <div class="relative overflow-hidden rounded-2xl shadow-sm group bg-gray-50 hover:shadow-lg">

                @foreach (collect($f_f_r->product_image)->take(1) as $fur_fur_random_image_2)
                    <img src="{{ asset("storage/$fur_fur_random_image_2") }}" alt="{{ $f_f_r->title }}"
                class="w-full h-48 object-cover rounded-lg shadow-md">
                @endforeach

                <a href="{{ route('furniture.show', ['furniture' => $f_f_r->id]) }}"
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">

                            <span>{{ $f_f_r->title }}</span>
                        </h4>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

    </div>

</section>


<section class="py-10">
    <div class="container mx-auto px-4">

        <div class="my-10">
            <x-heading :link="'javascript:avoid(0)'">{{ __('messages.entrywayfurniture') }}</x-heading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


            @foreach ($furnitures_entrywayfurniture as $f_f_r)

            <!-- bottom cards -->
            <div class="relative overflow-hidden rounded-2xl shadow-sm group bg-gray-50 hover:shadow-lg">

                @foreach (collect($f_f_r->product_image)->take(1) as $fur_fur_random_image_2)
                    <img src="{{ asset("storage/$fur_fur_random_image_2") }}" alt="{{ $f_f_r->title }}"
                class="w-full h-48 object-cover rounded-lg shadow-md">
                @endforeach

                <a href="{{ route('furniture.show', ['furniture' => $f_f_r->id]) }}"
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <h4 class="text-xl font-bold text-white">

                            <span>{{ $f_f_r->title }}</span>
                        </h4>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

    </div>

</section>



<div class="w-full items-center lg:px-24 max-w-7xl md:px-12 mx-auto px-8 py-12 mt-24">
    <div class="relative items-center">
        <div class="w-full justify-around lg:inline-flex lg:items-center">
            <div class="max-w-xl">
                <span class="text-sm text-app-orange font-semibold uppercase tracking-widest">{{ __('furniture.furniture') }}</span>
                <p class="text-black font-extrabold mt-8 text-4xl tracking-tight">
                    {{ __('furniture.book') }}

                    <span class="lg:block text-md text-gray-400">
                        {{ __('furniture.antiques') }}
                    </span>
                </p>
            </div>
            <div class="flex flex-col rtl:lg:mr-auto mt-12 sm:flex-row bg-primary rounded-md"><a
                    class="w-full items-center inline-flex duration-200 focus:outline-none font-medium justify-center px-6 py-3 rounded-xl text-center focus-visible:outline-black lg:w-auto bg-rose-500 focus-visible:ring-black hover:bg-rose-100 hover:text-rose-500 text-white"
                    href="{{ route('contact.us') }}">{{ __('furniture.book-now') }}


                    <span class="font-bold text-2xl ltr:ml-3 rtl:mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                          </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

</x-layout>
