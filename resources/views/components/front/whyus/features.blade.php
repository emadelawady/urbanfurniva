<div class="relative font-inter bg-white antialiased pt-12">

    <main class="relative min-h-screen flex flex-col justify-center overflow-hidden">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">

            <!-- Cards Hover Effect -->
            <section class="grid md:grid-cols-3 gap-6 max-md:max-w-xs mx-auto">
                <!-- Card #1 -->
                <div class="p-4 group bg_new relative before:absolute before:inset-0 before:bg-[url('./noise.png')] before:bg-[length:352px_382px] rounded-2xl border border-transparent shadow-md">
                    <div class="relative">
                        <div class="px-6 py-5">
                            <div class="font-nycd font-bold text-xs text-indigo-500 mb-3">كلاسيك</div>
                            <div class="text-lg font-bold text-slate-600 mb-2">تصميم أنيق</div>
                            <p class="text-xs leading-6 text-slate-400">يمكنك الحصول بسهولة على تصميم جذاب وأنيق لمطبخك حسب الرغبة.</p>
                        </div>
                        <div class="relative group-hover:-translate-y-1 transition-transform duration-500 ease-in-out">

                            <img class="group-hover:opacity-0 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/1.webp') }}" width="350" height="240" alt="Card image 01">

                            <img class="absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/2.webp') }}" width="350" height="240" alt="Card image 01 displaying on hover" aria-hidden="true">

                        </div>
                    </div>
                </div>
                <!-- Card #2 -->
                <div class="p-3 group bg_new relative before:absolute before:inset-0 before:bg-[url('./noise.png')] before:bg-[length:352px_382px] rounded-2xl border border-transparent shadow-md">
                    <div class="relative">
                        <div class="px-6 py-5">
                            <div class="font-nycd font-bold text-xs text-indigo-500 mb-3">مودرن</div>
                            <div class="text-lg font-bold text-slate-800 mb-2">انت فى أيد أمينة</div>
                            <p class="text-xs leading-6 text-slate-500">نحن نفهمك لذلك نحرص على الاحترافية فى التعامل مع تصميمات حديثة تلبى الذوق العام</p>
                        </div>
                        <div class="relative group-hover:-translate-y-1 transition-transform duration-500 ease-in-out">
                            <img class="group-hover:opacity-0 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/2.webp') }}" width="350" height="240" alt="Card image 02">
                            <img class="absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/1.webp') }}" width="350" height="240" alt="Card image 02 displaying on hover" aria-hidden="true">
                        </div>
                    </div>
                </div>
                <!-- Card #3 -->
                <div class="p-2 group bg_new relative before:absolute before:inset-0 before:bg-[url('./noise.png')] before:bg-[length:352px_382px] rounded-2xl border border-transparent shadow-md">
                    <div class="relative">
                        <div class="px-6 py-5">
                            <div class="font-nycd font-bold text-xs text-indigo-500 mb-3">خزائن</div>
                            <div class="text-lg font-bold text-slate-600 mb-2">خدمة مع ما بعد البيع</div>
                            <p class="text-xs leading-6 text-slate-500">
                                نحن دوماً فى خدمتكم يمكنك التواصل معنا فى أى وقت بعد التركيب اذا كان لديكم أى استفسار .
                            </p>
                        </div>
                        <div class="relative group-hover:-translate-y-1 transition-transform duration-500 ease-in-out">
                            <img class="group-hover:opacity-0 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/1.webp') }}" width="350" height="240" alt="Card image 03">
                            <img class="absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 rounded-3xl" src="{{ asset('images/slider/2.webp') }}" width="350" height="240" alt="Card image 03 displaying on hover" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End: Cards Hover Effect -->







            {{--

            [background:linear-gradient(theme(colors.slate.700),theme(colors.slate.700))_padding-box,linear-gradient(45deg,theme(colors.slate.700),theme(colors.slate.400/.8),theme(colors.slate.900))_border-box]
            --}}

        </div>

    </main>

    <!-- Page footer -->
    {{-- <footer class="absolute left-6 right-6 md:left-12 md:right-auto bottom-4 md:bottom-8 text-center md:text-left">
        <a class="text-xs text-slate-500 hover:underline" href="https://cruip.com">&copy;Cruip - Tailwind CSS templates</a>
    </footer> --}}


</div>
