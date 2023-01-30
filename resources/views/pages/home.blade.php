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
            <h1 class="text-[49px] font-semibold">Play Anytime<br>Anywhere</h1>
            <span class="inline-block text-[19px] font-semibold mt-3 leading-loose">Stream your games on any device,<br>on your own time.</span>
            <div class="mt-3">
                <x-cta></x-cta>
            </div>
        </div>

        <div class="absolute top-0 left-2 w-[511px] h-[352px] rounded-[45px] shadow-box-one bg-[#EFF0FF] z-0"></div>
        <div class="absolute top-[237px] left-[249px] w-[403px] h-[216px] rounded-[45px] shadow-box-one bg-[#DEE2FF] z-10"></div>
    </section>
</x-app>
