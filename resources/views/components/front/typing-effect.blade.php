<div
    x-data="{
        text: '',
        textArray : [
        '{{ __('homepage.design-your-pro-kitchen') }}',
        '{{ __('homepage.raise-the-size') }}',
        '{{ __('homepage.implementation') }}',
        '{{ __('homepage.after-sale') }}',
        '{{ __('homepage.work-for-you') }}',
        '{{ __('homepage.work-for-you-all-week') }}'
        ],
        textIndex: 0,
        charIndex: 0,
        typeSpeed: 90,
        cursorSpeed: 550,
        pauseEnd: 800,
        pauseStart: 10,
        direction: 'forward',
    }"
    x-init="$nextTick(() => {
        let typingInterval = setInterval(startTyping, $data.typeSpeed);

        function startTyping(){
            let current = $data.textArray[ $data.textIndex ];

            // check to see if we hit the end of the string
            if($data.charIndex > current.length){
                    $data.direction = 'backward';
                    clearInterval(typingInterval);

                    setTimeout(function(){
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseEnd);
            }

            $data.text = current.substring(0, $data.charIndex);

            if($data.direction == 'forward')
            {
                $data.charIndex += 1;
            }
            else
            {
                if($data.charIndex == 0)
                {
                    $data.direction = 'forward';
                    clearInterval(typingInterval);
                    setTimeout(function(){
                        $data.textIndex += 1;
                        if($data.textIndex >= $data.textArray.length)
                        {
                            $data.textIndex = 0;
                        }
                        typingInterval = setInterval(startTyping, $data.typeSpeed);
                    }, $data.pauseStart);
                }
                $data.charIndex -= 1;
            }
        }

        setInterval(function(){
            if($refs.cursor.classList.contains('hidden'))
            {
                $refs.cursor.classList.remove('hidden');
            }
            else
            {
                $refs.cursor.classList.add('hidden');
            }
        }, $data.cursorSpeed);

    })"
    class="w-full h-20 my-6 m-auto number_ltr rtl:number_rtl">
    <div class="relative flex items-center justify-around lg:justify-end h-auto">
        <p class="sm:text-center lg:text-right ltr:text-center w-full" x-text="text"></p>
        {{-- <span class="absolute right-0 w-2 -mr-2 bg-black h-3/4" x-ref="cursor"></span> --}}
    </div>
</div>
