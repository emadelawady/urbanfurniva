<div class="dark:bg-gray-900 p-16 my-10">
    <div class="mx-auto max-w-screen-xl px-2 py-12 sm:px-6 sm:py-12 lg:px-8 md:px-8 bg-gray-50 dark:bg-gray-900 rounded-lg shadow-md">
      <div class="max-w-screen-xl px-2 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white sm:text-4xl sm:leading-10 mt-8">
            {{ __('homepage.trust-by-many') }}
        </h2>
          <p class="mt-3 text-xl leading-7 text-gray-600 dark:text-gray-400 sm:mt-4">

            {{ __('homepage.many-customers-we-have') }}
          </p>
        </div>
      </div>
      <div class="pb-12 mt-10 bg-gray-50 dark:bg-gray-900 sm:pb-16">
        <div class="relative">
          <div class="absolute inset-0 h-1/2 bg-gray-50 dark:bg-gray-900"></div>
          <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
              <dl class="bg-white dark:bg-gray-800 rounded-lg shadow-lg sm:grid sm:grid-cols-3" data-module="countup">
                <div
                  class="flex flex-col p-6 text-center border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-r">
                  <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400" id="item-1">
                    {{ __('homepage.done-clients') }}
                  </dt>
                  <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                    aria-describedby="item-1" id="starsCount" data-countup-number="220">
                    0
                  </dd>
                </div>
                <div
                  class="flex flex-col p-6 text-center border-t border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l sm:border-r">
                  <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">
                    {{ __('homepage.in-progress') }}
                  </dt>
                  <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                    id="downloadsCount" data-countup-number="32">
                    0
                  </dd>
                </div>
                <div
                  class="flex flex-col p-6 text-center border-t border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l">
                  <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">

                    {{ __('homepage.work-rate') }}
                  </dt>

                  <span class="flex flex-wrap justify-center">

                    <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                    id="sponsorsCount" data-countup-number="75">
                    0
                  </dd>

                    <span class="text-indigo-600 text-3xl mx-3">%</span>


                  </span>




                </div>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
