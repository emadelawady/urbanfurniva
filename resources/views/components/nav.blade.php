<header class="relative bg-app-orange-2 z-30 shadow-xl text-sm" id="header">
    <nav class="navbar w-full ms-auto me-auto container">


      <div class="navbar-inner">

        {{-- <a href="{{ route('home.page') }}" class="brand">
            <img class="w-auto h-20 mx-4 m-auto" src="{{ asset('images/land-logo-2.png') }}" alt="">
        </a> --}}


            <div class="burger p-8 mx-4" id="burger">
                <span class="burger-line bg-appColor hover:text-white"></span>
                <span class="burger-line bg-appColor hover:text-white"></span>
                <span class="burger-line bg-appColor hover:text-white"></span>
            </div>
        </div>






      <div class="navbar-block" id="menu">
        <ul class="menu z-50 border-t border-t-appColor md:border-none">
            <li class="menu-item p-2">
                <a href="{{ route('home.page') }}" class="menu-link text-lg text-appColor hover:text-white">
                    {{ __('nav.home') }}
                </a>
            </li>
            <li class="menu-item p-2 {{ Route::is('about.us') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
                <a href="{{ route('about.us') }}" class="menu-link text-lg">
                    {{ __('nav.about-us') }}
                </a>
            </li>
            <li class="menu-item p-2 {{ Route::is('why.us') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
                <a href="{{ route('why.us') }}" class="menu-link text-lg">
                    {{ __('nav.why-us') }}
                </a>
            </li>







          <li class="menu-item dropdowntext-lg p-2 {{ Route::is('kitchens*') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
            <a href="{{ route('kitchens') }}" class="flex">
                <span class="dropdown-toggle menu-link">
                    {{ __('nav.kitchen') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </span>
            </a>
            <div class="dropdown-content bg-white text-app-orange rounded-lg z-40 lg:border-y lg:border-x lg:border-gray-400 hidden">
              <div class="dropdown-column">
                <div class="dropdown-group">
                  <div class="dropdown-title">
                    <span class="dropdown-icon">

                        @if (app()->getLocale('locale') == 'en')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                          </svg>

                        @endif

                        @if (app()->getLocale('locale') == 'ar')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                        @endif
                    </span>
                    <span class="text-base font-medium">
                        {{ __('nav.kitchen') }}
                    </span>
                  </div>
                  <ul class="dropdown-items">
                    <li>
                        <a href="{{ route('kitchens') }}" class="dropdown-link">
                            {{ __('nav.all-kitchen') }}
                        </a>
                    </li>
                    {{-- <li><a href="#" class="dropdown-link">HTML and CSS for Beginner</a></li>
                    <li><a href="#" class="dropdown-link">Complete Modern JavaScript</a></li>
                    <li><a href="#" class="dropdown-link">Complete React with Redux</a></li> --}}
                  </ul>
                </div>



                {{-- <div class="dropdown-group">
                  <div class="dropdown-title">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                    </span>
                    <span class="text-base font-medium">Web Design</span>
                  </div>
                  <ul class="dropdown-items">
                    <li><a href="#" class="dropdown-link">Web Design Bootcamp</a></li>
                    <li><a href="#" class="dropdown-link">Responsive Web Design</a></li>
                    <li><a href="#" class="dropdown-link">Figma for Web Designer</a></li>
                    <li><a href="#" class="dropdown-link">Webflow for Beginners</a></li>
                  </ul>
                </div> --}}


                {{-- <div class="dropdown-group">
                  <div class="dropdown-title">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                    </span>
                    <span class="text-base font-medium">Certification</span>
                  </div>
                  <ul class="dropdown-items">
                    <li><a href="#" class="dropdown-link">Free Certificates</a></li>
                    <li><a href="#" class="dropdown-link">Courses Certificates</a></li>
                    <li><a href="#" class="dropdown-link">Premium Certificates</a></li>
                  </ul>
                </div> --}}



              </div>
            </div>
          </li>
          <li class="menu-item dropdown text-lg p-2 {{ Route::is('furniture*') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
            <a href="{{ route('furniture') }}" class="flex">
                <span class="dropdown-toggle menu-link">
                    {{ __('nav.furniture') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </span>
            </a>



            <div class="dropdown-content bg-white text-app-orange rounded-lg z-40 lg:border-y lg:border-x lg:border-gray-200 hidden">
              <div class="dropdown-column">
                <div class="dropdown-group">


                  <div class="dropdown-block">
                    <span class="dropdown-icon">
                        @if (app()->getLocale('locale') == 'en')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                          </svg>

                        @endif

                        @if (app()->getLocale('locale') == 'ar')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                        @endif
                    </span>
                    <div class="dropdown-inner">
                      <a href="{{ route('furniture') }}" class="text-base font-medium">
                        {{ __('nav.all-furniture') }}
                      </a>
                      <p class="text-base text-gray-500 font-normal">
                        {{ __('nav.all-furniture-desc') }}
                      </p>
                    </div>
                  </div>



                  <div class="dropdown-block">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </span>
                    <div class="dropdown-inner">
                      <a href="#" class="text-base font-medium">توريد الأثاث للفنادق</a>
                      <p class="text-base text-gray-500 font-normal">
                       اذا كنت صاحب فندق وتبغى تجديد او توريد الأثاث
                      </p>
                    </div>
                  </div>

                  <div class="dropdown-block">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                    </span>
                    <div class="dropdown-inner">
                      <a href="#" class="text-base font-medium">توريد أثاث مكتبى</a>
                      <p class="text-base text-gray-500 font-normal">
                        اذا كنت صاحب مكتب او بتأسس مكتب او مقر لشركة وتريد توريد الأثاث
                      </p>
                    </div>
                  </div>


                </div>


                <div class="dropdown-group">
                  <div class="dropdown-block">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>

                    </span>
                    <div class="dropdown-inner">
                      <a href="#" class="text-base font-medium">Help Center</a>
                      <p class="text-base text-gray-500 font-normal">
                        Discover how to register, install and use our products.
                      </p>
                    </div>
                  </div>
                  <div class="dropdown-block">
                    <span class="dropdown-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                          </svg>
                    </span>
                    <div class="dropdown-inner">
                      <a href="#" class="text-base font-medium">Community</a>
                      <p class="text-base text-gray-500 font-normal">
                        Share and connect with other user in our communities.
                      </p>
                    </div>
                  </div>

                </div>



              </div>
            </div>





          </li>
            <li class="menu-item p-2 {{ Route::is('our.works') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
                <a href="{{ route('our.works') }}" class="menu-link text-lg">
                    {{ __('nav.our-works') }}
                </a>
            </li>
            <li class="menu-item p-2 {{ Route::is('contact.us') ? 'bg-appColor text-app-orange-2' : 'text-appColor'; }}">
                <a href="{{ route('contact.us') }}" class="menu-link text-lg">
                    {{ __('nav.contact-us') }}
                </a>
            </li>

        </ul>
      </div>
    </nav>
  </header>







