<div {{ $attributes->merge(['class' => 'max-w-xl mt-12 mx-auto space-y-6 lg:max-w-7xl']) }}>
    <x-heading class="!mb-0">
        {{-- {{ __('kitchens.latest-kitchens') }} --}}

        {{ __('messages.categories') }}
    </x-heading>
</div>


<section class="max-w-xl mx-auto lg:max-w-7xl mb-32 rounded-md">

    <div class="font-sans py-4">
        <div class="mx-auto lg:max-w-6xl md:max-w-4xl">

            <div class="relative z-40 mx-auto">

                <div class="flex flex-wrap justify-around mx-auto w-full xl:shadow-small-blue">

                    @foreach ($attr as $a)


                        <a href="{{ route($a['link']) }}" class="w-1/2 md:w-1/4 lg:w-1/6 py-2 text-center hover:scale-[1.03] transition-all">
                            <div>
                                <img src="{{ asset("storage/".$a['image']) }}" class="block w-11/12 h-36 mx-auto rounded-xl shadow-md">

                                <p class="pt-4 text-xs text-green-900 lg:text-lg md:text-base md:pt-6">
                                    {{ __($a['title']) }}
                                </p>
                            </div>
                        </a>

                    @endforeach


                </div>

            </div>

        </div>
    </div>

</section>



