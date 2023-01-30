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

    <section>
        <h1 class="text-[50px] font-semibold">Play Anytime<br>Anywhere</h1>
        <span class="text-xl font-semibold">Stream your games on any device,<br>on your own time.</span>
        <div>
            <a href="#">
                <button type="button" class="flex justify-center items-center bg-[#737EE2] w-[163px] rounded-lg text-white text-[23px] font-medium">Free Trial <span class="w-[21px] ml-3"><svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 27.976 27.976"><path d="M27.976,13.988A13.988,13.988,0,1,1,13.988,0,13.988,13.988,0,0,1,27.976,13.988ZM13.369,18.615a.875.875,0,1,0,1.238,1.238l5.246-5.246a.874.874,0,0,0,0-1.238L14.607,8.124a.875.875,0,1,0-1.238,1.238l3.753,3.752H8.743a.874.874,0,0,0,0,1.749h8.38l-3.754,3.753Z" fill="#fff" fill-rule="evenodd"/></svg></span></button>
            </a>
        </div>
    </section>
</x-app>
