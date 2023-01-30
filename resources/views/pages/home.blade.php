<x-app>
{{--    @if (Route::has('login'))--}}
{{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
    <header class="px-[26px] pt-[26px]">
        <x-navigation.mobile-nav></x-navigation.mobile-nav>
        <x-backgrounds.home-top-right-blob></x-backgrounds.home-top-right-blob>
    </header>

    <section class="relative mt-52 px-[26px] pt-12">
        <div class="relative z-20">
            <h1 class="text-5xl font-semibold">Play Anytime<br>Anywhere</h1>
            <span class="inline-block text-lg font-semibold mt-3 leading-loose">Stream your games on any device,<br>on your own time.</span>
            <div class="mt-3">
                <x-cta></x-cta>
            </div>
        </div>

        <div class="absolute top-0 left-2 w-[511px] h-[352px] rounded-[45px] shadow-box-one bg-[#EFF0FF] z-0"></div>
        <div class="absolute top-[237px] left-[249px] w-[403px] h-[216px] rounded-[45px] shadow-box-one bg-[#DEE2FF] z-10"></div>

        <style>
            iframe {
                height: 70.75rem;
                transform: scale(.33) translateY(837px) translateX(-1218px)!important;
                transform-origin: top;
                width: 74.9375rem;
            }
        </style>
        <div class="absolute top-0 left-0 z-50 w-full h-full">
            <iframe src='https://my.spline.design/untitled-abf201508daf1c9f132a7a7f0272836b/' frameborder='0' width='100%' height='100%'></iframe>
        </div>
    </section>
</x-app>
