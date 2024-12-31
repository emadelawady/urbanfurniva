<x-layout>



    <x-slot:title>
        {!! config('app.name') !!} - {{ __('nav.home') }}
    </x-slot>




    {{-- <x-front.homepage.slider /> --}}

    {{-- <x-front.homepage.hero /> --}}


    <x-front.homepage.hero-slider />






    {{-- make 4 grid layer تحت بعض --}}



    {{-- One  --}}

        {{-- <div>
            <x-heading :link="route('kitchens')" class="max-w-screen-xl mx-auto !mb-0 mt-24">
                {{ __('homepage.new-kitchens') }}
            </x-heading>

            <x-front.homepage.new-kitchens-items />
        </div>


 --}}





 <x-front.homepage.features />







    {{-- Two  --}}

    <div>
        <x-heading :link="route('kitchens')" class="max-w-screen-xl mx-auto !mb-0 mt-32">
            {{ __('kitchens.the-kitchens') }}
        </x-heading>

        <x-front.homepage.new-kitchens-items />
    </div>







<x-front.homepage.categories-section-component
    :sectionTitle="__('messages.kitchen_categories')"
    :model="[

        \App\Enums\CategoriesSectionEnum::KITCHEN->getData(
            routeName : 'burner.gas',
            translate : 'messages.burner-gas',
            param: ['burner.gas.show', 'burnerGas'],
            model : \App\Models\BurnerGas::class
        ),
        \App\Enums\CategoriesSectionEnum::KITCHEN->getData(
            routeName : 'range.hood',
            translate : 'messages.range-hood',
            param : ['range.hood.show', 'rangeHood'],
            model : \App\Models\RangeHood::class
        ),
        \App\Enums\CategoriesSectionEnum::KITCHEN->getData(
            routeName : 'ovens',
            translate : 'messages.ovens',
            param : ['ovens.show', 'oven'],
            model : \App\Models\Oven::class
        ),



        // 'messages.burner-gas' => [ 'burner.gas' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\BurnerGas::class)],
        // 'messages.range-hood' => [ 'range.hood' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\RangeHood::class)],
        // 'messages.ovens' => [ 'ovens' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\Oven::class)],




        // 'messages.trolls' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\Troll::class),
        // 'messages.door-handle' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\DoorHandle::class),
        // 'messages.sinks' => \App\Enums\CategoriesSectionEnum::KITCHEN->getData(\App\Models\Sink::class),

        ]"

/>











    <x-heading :link="route('furniture')" class="max-w-screen-xl mx-auto mt-32">

        {{ __('nav.furniture') }}
    </x-heading>

    <x-front.homepage.new-furniture-items />





    <x-front.homepage.categories-section-component

        :sectionTitle="__('messages.furniture-categories')"
        :model="[

            \App\Enums\CategoriesSectionEnum::Furniture->getData(
                routeName : 'furniture.livingroom',
                translate : 'messages.living-room',
                param: [
                    'furniture.livingroom.show',
                    'livingRoom'
                ],
                model : \App\Models\Livingroom::class
            ),
            \App\Enums\CategoriesSectionEnum::Furniture->getData(
                routeName : 'furniture.bedroom',
                translate : 'messages.bedrooms',
                param : [
                    'furniture.bedroom.show',
                    'bedroom'
                ],
                model : \App\Models\Furniture\Bedroom::class
            ),
            \App\Enums\CategoriesSectionEnum::Furniture->getData(
                routeName : 'furniture.diningroom',
                translate : 'messages.diningroom',
                param : [
                    'furniture.diningroom.show',
                    'diningroom'
                ],
                model : App\Models\Furniture\Diningroom::class
            ),

        ]"

/>




    <x-front.homepage.about-us />





    <x-front.homepage.our-works />






    <x-front.homepage.hero />




    <x-front.homepage.testimonial />



    {{-- <x-front.homepage.features-two /> --}}




    <x-front.homepage.counter-projects />

    {{-- <x-front.homepage.team /> --}}

    {{-- <x-front.homepage.companies /> --}}

</x-layout>
