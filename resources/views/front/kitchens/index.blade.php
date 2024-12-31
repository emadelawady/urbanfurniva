<x-layout>


{{--
    <!-- Hero section -->
<section class="py-2">
    <div class="container mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-4 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-4 md:mb-0 text-center">
                <h1 class="text-app-orange-2 font-bold text-3xl leading-tight mb-12">
                    {{ __('kitchens.discover') }}
                </h1>
                <p class="text-gray-400 text-xl mb-16">
                    {{ __('kitchens.materials') }}
                </p>
                <a href="{{ route('contact.us') }}"
                    class="px-6 py-3 border text-app-orange border-primary  font-bold rounded-full transition duration-200">
                    {{ __('kitchens.design') }}
                </a>
            </div>
            <div class="md:w-1/2 mt-12">

                <a href="{{ route('kitchens.show', ['kitchen' => $kitchens_random_one->id]) }}">
                    @foreach (collect($kitchens_random_one->product_image)->take(1) as $prod_random_image)
                        <img src="{{ asset("storage/$prod_random_image") }}" alt="{{ $kitchens_random_one->title }}"
                    class="w-5/6 h-96 m-auto my-4 rounded-lg shadow-lg">
                    @endforeach
                </a>
            </div>
        </div>
    </div>
</section> --}}




    <x-front.homepage.hero />





{{--
<section class="bg-white">
 <div class="max-w-screen-xl 2xl:max-w-screen-2xl px-8 md:px-12 mx-auto py-12 lg:py-24 space-y-24 flex flex-col justify-center lg:h-screen">
  <!-- Starts component -->
  <div class="grid grid-cols-1 gap-2 mt-12 list-none md:grid-cols-3 lg:mt-24 max-w-5xl mx-auto" role="list">
   <!---
            // Loop through the features array to render each feature dynamically.
            //
            // Apply dynamic background color using the bgColor property from the feature object. Also, make the background slightly transparent on hover to
            // reveal the background image more clearly.
            //
            // The title's color changes on hover, using the titleColor property from the feature object. This demonstrates how to dynamically apply Tailwind
            // CSS classes based on component state or properties.
            //
            //  {String(index + 1).padStart(2, "0") + "⏤"} Converts the current index (from iterating over the features array) to a string and adds 1 to it,
            // and adds a dash at the end of the number
            -->
   <article class="mx-auto  shadow-xl bg-cover bg-center min-h-150 relative border-8 border-black  transform duration-500 hover:-translate-y-12   group" style="background-image: url('https://i.pinimg.com/736x/2b/74/7b/2b747b71b782a8833f2b3ad9b0e37cd1.jpg');">
    <div class="bg-black/5 relative h-full group-hover:bg-opacity-0 min-h-150 flex flex-wrap flex-col pt-[30rem] hover:bg-opacity-75 transform duration-300">
     <div class=" bg-black p-8 h-full justify-end flex flex-col">
      <h1 class="text-white mt-2 text-xl mb-5 transform  translate-y-20 uppercase group-hover:translate-y-0 duration-300 group-hover:text-orange-500"> 01⏤ Experience </h1>
      <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 "> Crafting an effortless journey with user-first. </p>
     </div>
    </div>
   </article>


   <article class="mx-auto  shadow-xl bg-cover bg-center min-h-150 relative border-8 border-black  transform duration-500 hover:-translate-y-12   group" style="background-image: url('https://i.pinimg.com/564x/3c/c2/6c/3cc26c0140c2f0dc70d8aa48416c41dc.jpg');">
    <div class="bg-black relative h-full group-hover:bg-opacity-0 min-h-150  flex flex-wrap flex-col pt-[30rem] hover:bg-opacity-75 transform duration-300">
     <div class=" bg-black p-8 h-full justify-end flex flex-col">
      <h1 class="text-white mt-2 text-xl mb-5 transform  translate-y-20 uppercase group-hover:translate-y-0 duration-300 group-hover:text-indigo-400"> 02⏤ Interaction </h1>
      <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 "> Our platform is designed for simplicity and ease. </p>
     </div>
    </div>
   </article>


   <article class="mx-auto  shadow-xl bg-cover bg-center min-h-150 relative border-8 border-black  transform duration-500 hover:-translate-y-12   group" style="background-image: url('https://i.pinimg.com/564x/fa/4f/cf/fa4fcfd2db636f98eb0f2b5aecce0c28.jpg');">
    <div class="bg-black relative h-full group-hover:bg-opacity-0 min-h-150  flex flex-wrap flex-col pt-[30rem] hover:bg-opacity-75 transform duration-300">
     <div class=" bg-black p-8 h-full justify-end flex flex-col">
      <h1 class="text-white mt-2 text-xl mb-5 transform  translate-y-20 uppercase group-hover:translate-y-0 duration-300 group-hover:text-cyan-400"> 03⏤ Design </h1>
      <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 "> Our design philosophy centers around the user. </p>
     </div>
    </div>
   </article>
  </div> <!-- ends component -->


  <!-- Starts links to tutorial -->

 </div>
</section> --}}






<div class="container max-w-xl p-6 mt-4 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
    <x-heading :link="route('kitchens')">{{ __('kitchens.latest-kitchens') }}</x-heading>
</div>


<!-- ✅ Grid Section - Starts Here 👇 -->
<section id="Projects"
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    @foreach ($kitchens as $kitchen)


        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="{{ route('kitchens.show', ['kitchen' => $kitchen->id]) }}">

                @foreach (collect($kitchen->product_image)->take(1) as $prod_main_image)


                    <img src="{{ asset("storage/$prod_main_image") }}"
                        alt="{{ $kitchen->title }}" class="h-80 w-72 object-cover rounded-t-xl" />
                @endforeach

                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">
                        <x-verified>{{ __('kitchens.verified') }}</x-verified>
                    </span>
                    <p class="text-lg font-bold text-black truncate block capitalize">
                        {{ $kitchen->title }}
                    </p>
                    {{-- <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg>
                        </div>
                    </div> --}}
                </div>
            </a>
        </div>
        <!--   🛑 Product card 1 - Ends Here  -->

    @endforeach


</section>

<!-- 🛑 Grid Section - Ends Here -->






    <x-front.kitchen.categories />



    <section class="max-w-xl mx-auto space-y-12 lg:px-8 lg:max-w-7xl mb-16 rounded-md py-16">


        <x-front.kitchen.range-hood-component />


        <x-front.kitchen.burner-gas-component />


        <x-front.kitchen.oven-component />


        <x-front.kitchen.troll-component />


        <x-front.kitchen.door-handle-component />


        <x-front.kitchen.sink-component />


    </section>





<!-- Featured section -->
{{-- <section class="py-20">
    <div class="container mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Featured products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('data/2.jpeg') }}" alt="Coffee"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Single Origin Blend</h3>
                    <p class="text-gray-700 text-base">Our most popular blend, featuring beans from a single farm in
                        Ethiopia. Notes of chocolate, berries, and citrus.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-700 font-medium">$14.99</span>
                        <button
                            class="px-4 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-200">Add
                            to cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('data/3.jpeg') }}" alt="Coffee"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dark Roast Blend</h3>
                    <p class="text-gray-700 text-base">A bold and flavorful blend of beans from Brazil, Colombia, and
                        Indonesia. Notes of caramel, nuts, and tobacco.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-700 font-medium">$12.99</span>
                        <button
                            class="px-4 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-200">Add
                            to cart</button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('data/4.jpeg') }}" alt="Coffee"
                    class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dark Roast Blend</h3>
                    <p class="text-gray-700 text-base">A bold and flavorful blend of beans from Brazil, Colombia, and
                        Indonesia. Notes of caramel, nuts, and tobacco.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-700 font-medium">$12.99</span>
                        <button
                            class="px-4 py-2 bg-blue-600 text-white font-bold rounded-full hover:bg-blue-700 transition duration-200">Add
                            to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}




{{--

<div class="container max-w-xl p-6 mt-24 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">


<div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">



      <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h2 class="text-base font-semibold leading-7 text-blue-100 bg-blue-600 px-3 rounded-lg uppercase mb-4 lg:mb-8">
          Key Features</h2>
        <h1 class="lg:text-7xl text-4xl md:text-5xl font-bold tracking-tight text-gray-900 text-center">Enhanced
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 via-blue-800 to-gray-900">Insurance Solutions</span>
        </h1>
        <p class="mt-6 text-md text-gray-600 max-w-lg text-center">Discover the exceptional features of our insurance
          services designed to streamline processes and provide comprehensive coverage for your needs.</p>
      </div>

      <x-heading>المطابخ</x-heading>


      <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><svg
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                </svg></div>Customized Coverage Plans
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Tailor your insurance coverage to match your unique needs.
              Our customizable plans ensure you only pay for the coverage that matters most to you.</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><svg
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5"></path>
                </svg></div>Risk Assessment Expertise
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Benefit from our cutting-edge risk assessment model,
              providing accurate insights into potential risks and ensuring your coverage aligns with your risk profile.
            </dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><svg
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
                </svg></div>Cost-Efficient Premiums
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Experience cost-effective insurance solutions. We keep our
              premiums competitive, ensuring you receive optimal coverage without breaking the bank.</dd>
          </div>
          <div class="relative pl-16">
            <dt class="text-base font-semibold leading-7 text-gray-900">
              <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><svg
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                  </path>
                </svg></div>24/7 Customer Support
            </dt>
            <dd class="mt-2 text-base leading-7 text-gray-600">Our dedicated support team is available around the clock to
              assist you. Whether it's day or night, we're here to address your insurance-related queries promptly.</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

</div> --}}














<div class="container max-w-xl p-6 mt-24 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
    <x-heading :link="route('kitchens')">{{ __('kitchens.the-kitchens') }}</x-heading>
</div>

<div class="w-full items-center lg:px-24 max-w-7xl md:px-12 mx-auto px-8">

    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 ">

        @foreach ($kitchens_random as $kitchen_rand)

            @foreach (collect($kitchen_rand->product_image)->take(1) as $prod_rand_image)
                <div>
                    <a href="{{ route('kitchens.show', ['kitchen' => $kitchen_rand->id]) }}">
                        <img class="h-60 w-full rounded-lg" src="{{ asset("storage/$prod_rand_image") }}" alt="Gallery image" />
                    </a>
                </div>
            @endforeach

        @endforeach
    </div>

</div>







<div class="container max-w-xl p-6 mt-24 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
    <x-heading>{{ __('kitchens.kitchens') }}</x-heading>

        <div class="relative overflow-hidden group h-[500px] bg-primary card-hidden rounded-xl">

            @foreach (collect($kitchens_random_one->product_image)->take(1) as $prod_random_image)

                <img src="{{ asset("storage/$prod_random_image") }}"
                class="h-full transition-all delay-300 duration-400 ease-in w-full absolute group-hover:scale-105 object-center">

            @endforeach

            <div class="absolute p-8 z-50 gap-4 flex flex-col justify-end bg-opacity-45 h-full w-full bottom-0 !text-white ">
                <a href="{{ route('kitchens.show', ['kitchen' => $kitchens_random_one->id]) }}" class="text-[20px] sm:text-[24px] text-white md:text-[28px] font-canela">
                    {{ $kitchens_random_one->title }}
                </a>
                <p class="group-hover:block text-[14px] hidden">

                    {!! $kitchens_random_one->content !!}

                </p>

            </div>
            <div
                class="absolute transition-all duration-400 ease-in bg-gradient-to-b from-transparent to-black min-h-[650px] text-white bottom-0 group-hover:bottom-0 group-hover:min-h-[900px] w-full z-30">
            </div>
        </div>


</div>





<div class="w-full items-center lg:px-24 max-w-7xl md:px-12 mx-auto px-8 py-12 mt-24">
    <div class="relative items-center">


            <div class="w-full justify-around lg:inline-flex lg:items-center">
                <div class="max-w-xl">
                    <span class="text-sm text-app-orange font-semibold uppercase tracking-widest">{{ __('kitchens.kitchens') }}</span>
                    <p class="text-black font-extrabold mt-8 text-4xl tracking-tight">
                        {{ __('kitchens.book') }}

                        <span class="lg:block text-md text-gray-400">
                            {{ __('kitchens.including') }}
                         </span>
                    </p>
                </div>
                <div class="flex flex-col rtl:lg:mr-auto mt-12 sm:flex-row bg-primary rounded-md">

                    <a
                        class="w-full items-center inline-flex duration-200 focus:outline-none font-medium justify-center px-6 py-3 rounded-xl text-center focus-visible:outline-black lg:w-auto bg-rose-500 focus-visible:ring-black hover:bg-rose-100 hover:text-rose-500 text-white"
                        href="{{ route('contact.us') }}">

                        {{ __('kitchens.book') }}

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
